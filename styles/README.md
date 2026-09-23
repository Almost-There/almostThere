# Almost There — styles

The stylesheet for the current rebuild of the site, running at
[almost.fridge.run](https://almost.fridge.run).

This is **styles only**. The application it belongs to is a separate project;
what is here is the visual language, so it can be read, reused or rebuilt
against without dragging in a stack.

```
input.css           source — Tailwind layers plus the custom components
tailwind.config.js  theme, keyframes, fonts
app.css             compiled output
icon.svg            the site mark
fonts/              Inter and Rubik, latin subsets, self-hosted
```

## The look

Neobrutalist, and it all follows from one rule: **hard offset shadows with no
blur, a hairline border, and a small lift on hover.**

```css
.square {
  box-shadow: 4px 4px 0px rgba(0, 0, 0, 0.5);
  border: 1px solid rgba(255, 255, 255, 0.1);
}
.square:hover {
  box-shadow: 6px 6px 0px rgba(0, 0, 0, 0.5);
  transform: translateY(-2px);
}
```

Everything else is a variation on that — panels, board chips, the add button,
the sign-in badge.

## The accent colour

One custom property, `--the-color`, drives panel titles, board chips, links,
bullets and focus rings. The site lets a visitor pick it from a palette of 40,
so nothing hardcodes the accent:

```css
.square-title { background-color: var(--the-color); color: #222222; }
```

`#222222` is the ink that sits **on** the accent — panel titles, the logo, the
board chips. Using white there made the header read as a different material
from the panels below it; this keeps the whole page one surface.

Apply the saved colour before first paint, or it flashes the default:

```html
<script>
  try {
    var c = localStorage.getItem('almost-there-color');
    if (c) document.documentElement.style.setProperty('--the-color', c);
  } catch (e) {}
</script>
```

## Components

| Class | What |
|---|---|
| `.square`, `.square-title`, `.square-content` | the panel everything is built from |
| `.squares-grid`, `.add-square` | the dashboard grid |
| `.board-list`, `.board-item` | forum board chips, each painted its own colour |
| `.thread`, `.post` | imageboard-style threads and replies |
| `.bulletin-*` | the dated announcement feed |
| `.project-*` | change log grouped by project |
| `.neo-navbar`, `.nav-board` | sticky bar, and the board you are reading |
| `.floating-bg`, `.floating-element` | the drifting squares behind the header |
| `.site-logo` | the wordmark |

### The sticky navbar

`position: sticky` is constrained by its containing block, so the nav has to be
a **sibling** of the header rather than a child of it — nested, it comes unstuck
the moment the coloured band scrolls away, which is exactly when it is needed.
Its background is opaque because content scrolls underneath.

### The floating squares

The header effect: squares rising through the coloured band, one per 100px of
viewport width, sized 20–100px, 7–15s each.

Two things are easy to get wrong here, and both were:

- **A keyframe beats a plain declaration.** An `opacity` value on the element
  does nothing when the animation drives `opacity`. Transparency is set per
  element through `--float-peak`, which the keyframe reads.
- **Travel distance must match the container.** Rising a full viewport height
  inside a 12rem header that clips means each square spends most of its cycle
  out of sight, and the field looks sparse and slow. `--float-rise` on
  `.floating-bg` sets how far they actually climb.

The ink is `#222222`, same as everything else sitting on the accent. The whole
effect renders nothing under `prefers-reduced-motion` — it is decoration, so
that is the honest response.

## Fonts

Inter and Rubik, **self-hosted** from `fonts/`, latin subsets only. No Google
Fonts, no third-party request on page load. Both are SIL Open Font License.

## Building

```sh
npx tailwindcss -c tailwind.config.js -i input.css -o app.css --minify
```

Point the `content` globs in `tailwind.config.js` at your own templates — they
currently reference the application this was extracted from, so a build without
adjusting them will purge classes you are still using.
