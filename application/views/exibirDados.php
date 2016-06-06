<?php
$this->load->view('componentesFixos/header');
$this->load->view('componentesFixos/menubar');
if ($tela != '')
    $this->load->view($tela);
$this->load->view('componentesFixos/footer');