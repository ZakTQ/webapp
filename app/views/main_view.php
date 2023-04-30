<div class="container">
    <div class="row">

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/app/uploads/slider/slider.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/app/uploads/slider/slider.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/app/uploads/slider/slider.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>


        <?php
        foreach ($data as $item) {
        ?>
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $item['name'] ?></h5>
                    <p class="card-text"><?= $item['title'] ?></p>
                    <a href="#" class="btn btn-primary"><?= $item['price'] ?></a>
                </div>
            </div>
        <?php
        }
        ?>

    </div>
</div>