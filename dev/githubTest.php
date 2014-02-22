<?php if(!file_exists("import.php")) { die("Error! <br />import.php wasn't imported; File cannot be found.<br /> Almost There cannot be loaded"); }
else { include 'import.php'; } ?>
<!DOCTYPE html>
<html>
<head>
<? head(); ?>
<title class='dynTitle'>Almost There - Github Info</title>
</head>
<body>
<? preBody(); ?>
<?php
class GRepo
{
    protected 
        // needs "user"
        $src_userRepos = "https://api.github.com/users/%s/repos",
        // needs "user,repo"
        $src_userRepoDetails = "https://api.github.com/repos/%s/%s",
        $responseCode, $responseText,
        $user;

    public function __construct($user) {
        $this->user = $user;
    }

    public function listRepos() {
        $this->_request(
            sprintf($this->src_userRepos, $this->user));
        if ($this->responseCode != 200) {
            throw new Exception('Server error!'); // e.g
        }
        return json_decode($this->responseText);
    }

    public function getRepoDetails($repo) {
        $this->_request(
            sprintf($this->src_userRepoDetails, $this->user, $repo));
        if ($this->responseCode != 200) {
            throw new Exception('Server error!'); // e.g
        }
        return json_decode($this->responseText);
    }

    // Could be extended, e.g with CURL..
    protected function _request($url) {
        $contents =@ file_get_contents($url);
        $this->responseCode = (false === $contents) ? 400 : 200;
        $this->responseText = $contents;
    }
}

// Test
$gr = new GRepo('qeremy');
print_r( $gr->listRepos() );
print_r( $gr->getRepoDetails('mii') );
?>
<? postBody(); ?>
</body>
</html>