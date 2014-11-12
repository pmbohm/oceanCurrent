<?php
/*
 *
 * usage:
 * $data = array('title' => 'My title', 'content' => 'My content');
 * $tmpl = new Template('template.php', $data);
 * echo $tmpl->render();
*/

class Template {

    protected $path, $data;

    public function __construct($path, $data = array()) {
        $this->path = $path;
        $this->data = $data;
    }

    public function render() {
        if (file_exists($this->path)) {
            //Extracts vars to current view scope
            extract($this->data);

            //Starts output buffering
            ob_start();

            //Includes contents
            include $this->path;
            $buffer = ob_get_contents();
            @ob_end_clean();

            //Returns output buffer
            return $buffer;
        } else {
            //Throws exception
        }
    }
}

?>