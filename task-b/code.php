<?php

    /* 
     *  Function    : generateSentence()
     * 
     *  Description : Generate a sentence listing out all items provided in an array.
     *  
     *  Parameters  : (string)               start         - The start of the sentence
     *                (array[string])        items         - The list of items
     *                (string/array[string]) append        - (optional) item types to be appended to each item
     * 
     *  Return      : string
     * 
     *  Example     : See run.php for input/output examples
     *  
     *  Test        : Execute run.php to test your implementation.
     *                (In console, simply run the command 'php run.php')
     * 
     */

    
    function generateSentence($start, $items, $append = null) {
        $sentence = $start . ':';
        $count = count($items);
        if ($count > 0) {
            foreach ($items as $key => $val) {
                $sentence .= ($key == $count - 1 ? ' and ' : ($key == 0 ? ' ' : ', ')) . $val;
                if ($append) {
                    if (is_array($append)) {
                        $sentence .= ' ' . $append[$key];
                    } else {
                        $sentence .= ' ' . $append;
                    }
                }
            }
            $sentence .= '.';
        }
        return $sentence;
    }