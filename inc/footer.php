

<?php

  require_once("../componentes/footer.php");

  $option = "intranet"

?>


<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js" integrity="sha512-quHCp3WbBNkwLfYUMd+KwBAgpVukJu5MncuQaWXgCrfgcxCJAq/fo+oqrRKOj+UKEmyMCG3tb8RB63W+EmrOBg==" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/alertify.js/0.3.11/alertify.min.js" integrity="sha512-2R8JJ9GapQ1VCvcazWIP4F7rOrMs6mzorqtZlXpvakAU0O/iw4n90CFrmG9+BwI//xxtnHxb5rbpkIF2s6z39w==" crossorigin="anonymous"></script>

<?php

  switch ($option) {

    case 'intranet':
      echo "<script src='". RUTA_URL ."assets/js/app.js'></script>";
      break;

    default:
      echo "<script src='". RUTA_URL ."assets/js/app.js'></script>";
      break;
  }


 ?>



</body>
