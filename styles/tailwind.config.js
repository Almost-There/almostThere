/**
 * Ported from the Next.js tailwind.config.ts.
 *
 * `content` scans the PHP templates and the React islands, because between them
 * they are where every class now lives. Miss either and Tailwind silently drops
 * the classes it never saw, which looks like a broken stylesheet rather than a
 * broken config.
 */
module.exports = {
  darkMode: ['class'],
  content: [
    'src/**/*.php',
    'public/**/*.php',
    'ui/**/*.{ts,tsx}',
  ],
  theme: {
    container: { center: true, padding: '2rem', screens: { '2xl': '1400px' } },
    extend: {
      colors: {
        // 'the-color' is the user-set accent. It is a raw CSS variable rather
        // than an HSL triple because people pick it with a colour input, which
        // hands back hex.
        'the-color': 'var(--the-color)',
        border: 'hsl(var(--border))',
        input: 'hsl(var(--input))',
        ring: 'hsl(var(--ring))',
        background: 'hsl(var(--background))',
        foreground: 'hsl(var(--foreground))',
        primary: { DEFAULT: 'hsl(var(--primary))', foreground: 'hsl(var(--primary-foreground))' },
        secondary: { DEFAULT: 'hsl(var(--secondary))', foreground: 'hsl(var(--secondary-foreground))' },
        destructive: { DEFAULT: 'hsl(var(--destructive))', foreground: 'hsl(var(--destructive-foreground))' },
        muted: { DEFAULT: 'hsl(var(--muted))', foreground: 'hsl(var(--muted-foreground))' },
        accent: { DEFAULT: 'hsl(var(--accent))', foreground: 'hsl(var(--accent-foreground))' },
        popover: { DEFAULT: 'hsl(var(--popover))', foreground: 'hsl(var(--popover-foreground))' },
        card: { DEFAULT: 'hsl(var(--card))', foreground: 'hsl(var(--card-foreground))' },
      },
      borderRadius: {
        lg: 'var(--radius)',
        md: 'calc(var(--radius) - 2px)',
        sm: 'calc(var(--radius) - 4px)',
      },
      // Carried over from the original config, unchanged. float-up is what the
      // header background actually uses: elements rise a full viewport height
      // over 20s, fading in at 5% and back out at 95%.
      keyframes: {
        // Rise, fade in, fade out, with a slow quarter-turn so no two squares
        // look like the same square. Distance and peak opacity come from
        // custom properties: the container sets the travel, each element sets
        // how solid it gets, and both stay out of the JavaScript.
        'float-up': {
          '0%':   { transform: 'translateY(0) rotate(0deg)', opacity: '0' },
          '14%':  { opacity: 'var(--float-peak, 0.6)' },
          '86%':  { opacity: 'var(--float-peak, 0.6)' },
          '100%': { transform: 'translateY(calc(-1 * var(--float-rise, 17rem))) rotate(7deg)', opacity: '0' },
        },
        wobble: {
          '0%':   { marginLeft: '0' },
          '50%':  { marginLeft: '5px' },
          '100%': { marginLeft: '0' },
        },
      },
      animation: {
        'float-up': 'float-up 12s linear infinite',
        wobble: 'wobble 3s infinite ease-in-out',
      },
      fontFamily: {
        sans: ['Inter', 'system-ui', 'sans-serif'],
        rubik: ['Rubik', 'system-ui', 'sans-serif'],
      },
    },
  },
  plugins: [],
};
