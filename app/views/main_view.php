<div class="container">
    <div class="row">

        <?php
        class Select extends Database
        {

            public function query()
            {
                $sql = 'SELECT name,title,price FROM product ORDER BY name';
                foreach ($this->getInstance()->query($sql) as $row) {
        ?>
                    <div class="card" style="width: 18rem;">
                        <img src="https://www.goha.ru/s/f/N2/EV/bmEuphiPTm.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['name'] ?></h5>
                            <p class="card-text"><?= $row['title'] ?> </p>
                            <a href="#" class="btn btn-primary"><?= $row['price'] ?></a>
                        </div>
                    </div>
        <?php
                }
            }
        }

        $result = new Select();
        $result->query();

        ?>

    </div>
</div>