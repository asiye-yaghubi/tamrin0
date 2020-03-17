<?php
 function flash($message ,$alertclass='info')
{
    session()->flash('message',$message);
    session()->flash('alertclass',$alertclass);


}