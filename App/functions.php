<?php
/**
 * Site wide helper functions
 * @author Simon Davies
 */

  if (! function_exists('dd')) {
     /**
      * A die and dump type of fucntion. based on laravels dd function
      */
     function dd()
     {
         die(var_dump(func_get_args()));
     }
 }
