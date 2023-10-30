<!-- Ülesanne 14 -- Pisipildid kolmes reas -- Ingmar Hendrik Rohusaar -- 30.oktoober -->
<!DOCTYPE html>
<html>
<head>
    <style>
        .thumbnail {
            width: 30%;
            margin: 10px;
            cursor: pointer;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 50px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.9);
        }
        .modal-content {
            margin: auto;
            display: block;
            max-width: 80%;
            max-height: 80%;
        }
    </style>
</head>
<body>
<?php
$uploadDir = "uploads/";
$images = glob($uploadDir . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);
$columns = 3; 

echo '<div class="modal" id="modal">';
echo '<span class="close" id="close">&times;</span>';
echo '<img class="modal-content" id="modal-img">';
echo '</div>';
echo '<div style="text-align: center;">';
for ($i = 0; $i < count($images); $i++) {
    if ($i % $columns === 0) {
        echo '<br>';
    }
    echo '<img class="thumbnail" src="' . $images[$i] . '" onclick="openModal(this.src)">';
}
echo '</div>';

?>
<script>
    function openModal(imgSrc) {
        var modal = document.getElementById("modal");
        var modalImg = document.getElementById("modal-img");
        modal.style.display = "block";
        modalImg.src = imgSrc;
        var closeBtn = document.getElementById("close");
        closeBtn.onclick = function () {
            modal.style.display = "none";
        };
    }
</script>
</body>
</html>
