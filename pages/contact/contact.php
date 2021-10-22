<?php include '../../shared/header.php' ?>

<section class="form_wrap">

    <section class="contact_info">
        <section class="info_title">
            <span class="fa fa-user-circle"></span>
            <h2>Información<br>de contacto</h2>
        </section>
    </section>

    <form action="enviar.php" method="post" class="form_contact">
        <h2>Envía un mensaje:</h2>
        <div class="user_info">
            <label for="nombre">Nombre *</label>
            <input type="text" id="names" required>

            <label for="telefono">Teléfono</label>
            <input type="number" id="phone">

            <label for="correo">Correo electrónico *</label>
            <input type="text" id="email" required>

            <label for="mensaje">Mensaje *</label>
            <textarea id="mensaje" required></textarea>

            <input type="button" value="Enviar Mensaje" id="btnSend">
        </div>
    </form>

</section>

<?php include '../../shared/footer.php' ?>