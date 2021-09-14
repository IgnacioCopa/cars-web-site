<body ondragstart="return false">

<?php //head+ header + nav (estatica)
 include "views/templates/navigation.php" 
?>


<?php //vista (dinamica) de las diferentes paginas
        $mvc = new MvcController();
        $mvc -> enlacesPaginasController();
?>


</body>

</html>