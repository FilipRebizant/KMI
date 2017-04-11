<footer>Footer</footer>
<script type="text/javascript" src="public/js/jquery-3.2.0.min.js"></script>
<script type="text/javascript" src="public/js/script.js"></script>
<?php
    if(isset($this->js)){
        foreach ($this->js as $js){
            echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
        }
    } ?>

</body>
</html>