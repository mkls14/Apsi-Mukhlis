<style>
    .active{
        background-color: white;
        
    }
    .active span{
        color: black;
    }
    .active i{
        color: black !important;
    }
</style>

<!-- Sidebar -->
<ul class="navbar-nav  sidebar sidebar-light accordion " id="accordionSidebar" style="background-color: #F5F5DC !important; ">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" >
        <div class="sidebar-brand-icon rotate-n-10 ">
            <i  class="fas fa-sharp fa-solid fa-bars" ></i>
        </div>
        <div class="sidebar-brand-text mx-3" style="color: black;"> Sistem Monitoring</div>
    </a>
    
    <!-- Divider -->
    <hr class="sidebar-divider">

    
<!--Tampilan Side Admin-->
    <?php if( in_groups('admin')) : ?>

        <div class="sidebar-heading" style="color: black;">
            Administrator
        </div>

        <!-- Nav Item - Dashboard Admin -->
        <li class="nav-item ">
            <a class="nav-link <?= ($title == 'Dashboard')? 'active' : '' ?>" href="<?= base_url('admin'); ?>">
                <i class="fas fa-fw fa-solid fa-chart-line"></i>
                <span>Dashboard </span></a>
        </li>
                
    <?php endif; ?>

<!--Tampilan Side User-->
    <?php if( in_groups('user')) : ?>

        <div class="sidebar-heading" style="color: black;">
            User
        </div>

        <!-- Nav Item - Dashboard user -->
        <li class="nav-item">
            <a class="nav-link <?= ($title == 'Dashboard')? 'active' : '' ?>" href="<?= base_url('/user'); ?>">
            <i class="fas fa-fw fa-solid fa-chart-line"></i>
            <span>Dashboard </span></a>
        </li>
    <?php endif; ?>

<!-- Tampilan Menu Profil Untuk Semua -->
    <hr class="sidebar-divider">

    <div class="sidebar-heading" style="color: black;">
        Account
    </div>

    <!-- Nav Item - Account -->
    <li class="nav-item">
        <a class="nav-link <?= ($title == 'Profile')? 'active' : '' ?>" href="<?= base_url('account'); ?>">
            <i class="fas fa-fwfa-solid fa-user"></i>
            <span>Profile</span></a>
    </li>
    <hr class="sidebar-divider">
        
        <div class="sidebar-heading" style="color: black;">
            Kelola Data
        </div>

     <!-- Nav Item - Suhu & Kelembaban -->
     <li class="nav-item">
            <a class="nav-link <?= ($title == 'Suhu & Kelembaban')? 'active' : '' ?>" href="<?= base_url('/suhulist'); ?>">
                <i class="fas fa-fw fa-solid fa-database"></i>
                <span>Suhu dan Kelembaban </span></a>
        </li>


<!-- Tampilan Menu User -->
    <?php if( in_groups('user')) : ?>

        <!-- Nav Item - Pembibitan -->
        <li class="nav-item">
            <a class="nav-link <?= ($title == 'Pembibitan')? 'active' : '' ?>" href="<?= base_url('/bibitlist'); ?>">
                <i class="fas fa-fw fa-solid fa-database"></i>
                <span> Pembibitan </span></a>
        </li>

    <?php endif; ?>

<!-- Tampilan Menu Admin -->  

    <?php if( in_groups('admin')) : ?>
         <!-- Nav Item - Pembibitan -->
            <li class="nav-item">
                <a class="nav-link <?= ($title == 'Pembibitan')? 'active' : '' ?>" href="<?= base_url('/bibitadmin'); ?>">
                    <i class="fas fa-fw fa-solid fa-database"></i>
                    <span> Pembibitan </span></a>
            </li>


    
        <hr class="sidebar-divider">

        <div class="sidebar-heading" style="color: black;">
            User Management
        </div>

        <!-- Nav Item - Userlist -->
            <li class="nav-item">
                <a class="nav-link <?= ($title == 'User List')? 'active' : '' ?>"" href="<?= base_url('/userlist'); ?>">
                    <i class="fas fa-fw fa-sharp fa-solid fa-user-tie"></i>
                    <span>Kelola User </span></a>
            </li>


    <?php endif; ?>



    
   

    <!-- Nav Item - Logout -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('logout'); ?>" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-fw fa-sign-out-alt fa-sm "></i>
            <span>Logout</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->