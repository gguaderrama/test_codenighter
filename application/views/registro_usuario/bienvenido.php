<body>
<!-- <h1>Bienvenido al sistema de Registro de Usuario</h1>
<?= getNombre()?>
<?= $mi_menu; ?> -->
<!-- <form  action="<?=site_url('/registrousuario/store')?>" method="POST">
    <p>Nombre: <input type="text" name="nombre" size="40" required></p>
    <p>Apellido: <input type="text" name="apellido" size="40" required></p>
    <p>Edad: <input type="number" name="edad" size="40" required></p>
    <input type="submit">
</form> -->

<script type="text/javascript">
    dhtmlxEvent(window,"load",function(){ 
        var layout = new dhtmlXLayoutObject(document.body,"2U"); 
        layout.cells("a").setText("Contacts");   
        layout.cells("b").setText("Contact Details");  
        layout.cells("b").setWidth(500); 
    });
</script>
</body>
</html>
<style>
    html, body {
        width: 100%;      /*provides the correct work of a full-screen layout*/
        height: 100%;     /*provides the correct work of a full-screen layout*/
        overflow: hidden; /*hides the default body's space*/
        margin: 0px;      /*hides the body's scrolls*/
    }
</style>
