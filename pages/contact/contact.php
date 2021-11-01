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
            <input type="text" id="names" name="nombre" required>

            <label for="telefono">Teléfono</label>
            <input type="number" id="phone" name="telefono">

            <label for="correo">Correo electrónico *</label>
            <input type="text" id="email" name="correo" required>

            <label for="mensaje">Mensaje *</label>
            <textarea id="mensaje" name="mensaje" required></textarea>

            <p><input type="submit" value="Enviar"/></p>
        </div>
    </form>

</section>

<script src="/treball-de-recerca/assets/js/jquery-3.2.1.js"></script>
<script src="/treball-de-recerca/assets/js/contact_form.js"></script>

<?php include '../../shared/footer.php' ?>