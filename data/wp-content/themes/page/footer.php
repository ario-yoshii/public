<script>
    $(function() {
        $('form .hasDatepicker').attr('autoComplete', 'none');
    });
</script>
<?php wp_footer(); ?>
<?php if (is_page('privacypolicy')) : ?>

    <script src="https://bot.talkappi.com/assets/talkappi/talkappi.js?tid=h-kyocera-hp-1" defer="defer"></script>
<?php else : ?>
    <?php
    $dir = explode('/', $_SERVER["REQUEST_URI"]);
    $str = $dir[1];
    switch ($str) {
        case "en":
            $lang = '-en';
            break;
        case "cn":
            $lang = '-cn';
            break;
        case "tc":
            $lang = '-tw';
            break;
        case "kr":
            $lang = '-kr';
            break;
        default:
            $lang = '';
    }
    ?>

    <script src="https://bot.talkappi.com/assets/talkappi/talkappi.js?tid=h-kyocera-hp<?php echo $lang; ?>" defer="defer"></script>
<?php endif; ?>
</body>

</html>
<!--20230512-->