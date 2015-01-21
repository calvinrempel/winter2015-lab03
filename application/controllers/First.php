<?php

/**
 * This controller displays the first quote on record.
 */
class First extends Application {
    
    /**
     * The default behaviour of First is to show the first quote on record.
     */
    public function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->first();
        $this->data = array_merge( $this->data, $source );

        $this->render();
    }
           
    function zzz() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get(1);
        $this->data = array_merge( $this->data, $source );

        $this->render();
    }
    
    function gimme( $num ) {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get($num);
        $this->data = array_merge( $this->data, $source );

        $this->render();
    }
}

