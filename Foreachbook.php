<?php

                    


// added a line

                $books = array(
                    // key          // value
                    'The Hobbit' => array(
                                    'published' => 1937,
                                    'author' => 'J. R. R. Tolkien',
                                    'pages' => 310,
                                    'Contributors' => array(
                                                'Bill Murry',
                                                'Sandra Oconner',
                                                'Murphy Brown'
                                        )
                    ),
                    'Game of Thrones' => array(
                                    'published' => 1996,
                                    'author' => 'George R. R. Martin',
                                    'pages' => 835
                    ),
                    'The Catcher in the Rye' => array(
                                    'published' => 1951,
                                    'author' => 'J. D. Salinger',
                                    'pages' => 220
                    ),
                    'A Tale of Two Cities' => array(
                                    'published' => 1859,
                                    'author' => 'Charles Dickens',
                                    'pages' => 544
                        
                    )
                    );
                        
                        foreach($books as $title => $book) {
                                echo ("{$title} \n");
                            foreach($book as $key => $value) {
                                if(is_array($value)) {
                                    echo "Contributors: " . PHP_EOL;
                                    foreach ($value as $Contributors) {
                                        echo "\t{$Contributors}" . PHP_EOL;
                                        # code...
                                    }
                                    echo PHP_EOL;
                                }
                                else {

                                echo ("\t{$key} {$value} \n");
                            }
                            }
                            } 
                               
                           
                		 // echo "$key as 'published . $title .\n";
                			# code...
                
                
                            # code... 
               








































?>