<main>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Cover</th>
      <th scope="col">Musica</th>
      <th scope="col">Artista</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      if($result = $this->queryGetMusic->num_rows){
        while($row = $this->queryGetMusic->fetch_assoc()){ 
    ?>
          <tr>
            <th scope="row"><?=$row['id'];?></th>
            <td><img src="<?=URL_COVER_PIC.'/user-'.$_SESSION['user'].'/'.$row['coverFileName'];?>" alt="" width="100" height="100"></td>
            <td><?=$row['musicName'];?></td>
            <td><?=$row['artistName'];?></td>
            <td><a href="">Tocar</a></td>
          </tr>
    <?php }} ?>
  </tbody>
</table>
</main>