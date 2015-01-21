<?php

/**
 * This controller displays the first quote on record.
 */
class Bingo extends Application {
    
    /**
     * The default behaviour of First is to show the first quote on record.
     */
    public function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get(5);
        $this->data = array_merge( $this->data, $source );

        $this->render();
    }
    
    public function wisdom() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get(6);
        $this->data = array_merge( $this->data, $source );

        $this->render();
    }
}

