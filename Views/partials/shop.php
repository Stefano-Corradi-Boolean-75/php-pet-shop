
<?php
//var_dump($movies);
?>



  <main>

  <div class="container">

    <div class="row py-5">
    <h3>Alimenti</h3>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Prezzo</th>
          <th scope="col">Immagine</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($food as $item): ?>
          <tr>
            <td><?php echo $item->category->icon ?></td>
            <td><?php echo $item->name ?></td>
            <td>
            <?php if($item->getDiscount() > 0): ?>
             <p class="text-decoration-line-through"><?php echo $item->price ?></p>
            <?php endif; ?>
             <?php echo $item->getFinalPriceFormat() ?>
            </td>
            <td><img src="<?php echo $item->image ?>" alt="<?php echo $item->name ?>" title="<?php echo $item->name ?>" ></td>
          </tr>
        <?php endforeach; ?>
        

      </tbody>
    </table>
    <h3>Giochi</h3>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Prezzo</th>
          <th scope="col">Immagine</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($toy as $item): ?>
          <tr>
            <td><?php echo $item->category->icon ?></td>
            <td><?php echo $item->name ?></td>
            <td>
            <?php if($item->getDiscount() > 0): ?>
             <p class="text-decoration-line-through"><?php echo $item->price ?></p>
            <?php endif; ?>
             <?php echo $item->getFinalPriceFormat() ?>
            </td>
            <td><img src="<?php echo $item->image ?>" alt="<?php echo $item->name ?>" title="<?php echo $item->name ?>" ></td>
          </tr>
        <?php endforeach; ?>
        
      </tbody>
    </table>

    <h3>Accessori</h3>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Prezzo</th>
          <th scope="col">Immagine</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($accessory as $item): ?>
          <tr>
            <td><?php echo $item->category->icon ?></td>
            <td><?php echo $item->name ?></td>
            <td>
            <?php if($item->getDiscount() > 0): ?>
             <p class="text-decoration-line-through"><?php echo $item->price ?></p>
            <?php endif; ?>
             <?php echo $item->getFinalPriceFormat() ?>
            </td>
            <td><img src="<?php echo $item->image ?>" alt="<?php echo $item->name ?>" title="<?php echo $item->name ?>" ></td>
          </tr>
        <?php endforeach; ?>
        

      </tbody>
    </table>


    </div>

  </div>

  </main>


