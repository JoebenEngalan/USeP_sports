<!-- Sidebar -->
<div id="wrapper">
<ul class="sidebar navbar-nav">
      <!--Main home Page-->
      <li class="nav-item active">
        <a class="nav-link" href="mainpage.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <!--Add Borrower Page-->
      <li class="nav-item">
        <a class="nav-link" href="add-borrower.php">
          <i class="fas fa-fw fa-male"></i>
          <span>Add Borrowers Page</span></a>
      </li>
      <!--Borrow item Page-->
      <li class="nav-item">
        <a class="nav-link" href="borrow.php">
          <i class="fas fa-fw fa-redo"></i>
          <span>Borrow Page</span></a>
      </li>
      <!--Return item Page-->
      <li class="nav-item">
        <a class="nav-link" href="return-page.php">
          <i class="fas fa-fw fa-undo"></i>
          <span>Return Page</span></a>
      </li>
      <!--Add item Page-->
      <li class="nav-item">
        <a class="nav-link" href="item-page.php">
          <i class="fas fa-fw fa-bicycle"></i>
          <span>Item Page</span></a>
      </li> 

      <!--table Page-->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Print Tables</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Tables:</h6>
          <a class="dropdown-item" href="tablesM.php">Borrowers</a>
          <a class="dropdown-item" href="tablesB.php">Borrow</a>
          <a class="dropdown-item" href="tablesR.php">Return</a>
          <a class="dropdown-item" href="tablesE.php">Equipment</a>
        </div>
      </li>

    </ul>
