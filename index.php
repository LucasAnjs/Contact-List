<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <?php
    include('View/header.php');
    include('DB/database.php');
  ?>
  <title>Contatos</title>
</head>
<body>
  <header class="head">
    <img src="img/contact.png">
    <h2>Lista de Contatos</h2>
  </header>
  <div class="input">
    <div class="input-group mb-3">
      <input type="text" id="search" onchange="searchContact()" class="form-control" placeholder="Pesquisar">
      <button class="btn btn-primary" type="button" onclick="searchContact()" id="find"><i class="fa-solid fa-magnifying-glass"></i></button>
    </div>
  </div>
  <div class="container">
    <table id="table" class="table table-hover dt-responsive nowrap" style="width:100%">
      <thead>
        <tr>
          <th>Nome</th>
          <th>E-mail</th>
          <th>Ramal</th>
          <th>Setor</th>
        </tr>
      </thead>
      <tbody>
      <?php
        $query = "SELECT name, mail, phone, department FROM contact_list";
        $res = mysqli_query($connection, $query);
        if (mysqli_num_rows($res)) {
          while ($row = mysqli_fetch_assoc($res)) {
            echo "<tr>";
            echo "<td>". $row["name"] ."</td>";
            echo "<td>". $row["mail"] ."</td>";
            echo "<td>". $row["phone"] ."</td>";
            echo "<td>". $row["department"] ."</td>";
            echo "</tr>";
          }
        }
        ?>
    </tbody>
  </table>
  </div>
</body>
</html>