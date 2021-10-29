<?php include '../../shared/header.php' ?>

<div class="container__content">
    <div class="section experience__work">
        <h2>Experiencia laboral</h2>

        <?php include './laboral.php' ?>
    </div>

    <hr class="experience__separator">

    <div class="section experience__study">
        <h2>Estudios</h2>

        <?php include './academic.php' ?>
    </div>
</div>

<?php include '../../shared/footer.php' ?>

<script src="https://code.jquery.com/jquery-latest.min.js"></script>
<script src="/treball-de-recerca/assets/js/jquery.connections.js"></script>
<script>
    AOS.init();

    $(document).ready(function() {
        for (let index = 0; index < $('.academic .experience-layout-row').length; index++) {
            $('#academic-row-' + (index + 1)).connections(({
                to: '#academic-row-' + (index + 2)
            }));
        }

        for (let index = 0; index < $('.laboral .experience-layout-row').length; index++) {
            $('#laboral-row-' + (index + 1)).connections(({
                to: '#laboral-row-' + (index + 2)
            }));
        }

        $(window).on('resize', function() {
            $('connection').connections('update');
        });
    });
</script>