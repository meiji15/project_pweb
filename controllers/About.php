<?php

class About extends Controller {
    public function index()
    {
        $data["judul"] = "About";
        $this->view("theme/header", $data);
        $this->view("about/index");
        $this->view("theme/footer");
    }
}