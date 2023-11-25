<?php echo $this->extend("layouts/base"); ?>

<?php echo $this->section("content"); ?>

<link rel="stylesheet" href="<?= base_url('theme/css/slidestyle.css'); ?>">

<h1 class="text-center my-5"> Dashboard</h1>
<section>

    <div class="container">
        <div class="row row-cols-3 g-3">
            <!-- General Statistics  -->
            <div class="col-6">
                <div class="card">
                    <h4 class="text-center my-1">
                        General Statistics
                    </h4>
                </div>
                <div class="container-fluid py-4">
                    <div class="row">
                        <div class="col-xl-4 col-sm-7 mb-xl-0 mb-5">
                            <div class="card">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="col-10">
                                            <div class="numbers">
                                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Today's Money
                                                </p>
                                                <h5 class="font-weight-bolder mb-0">
                                                    $53,000
                                                    <span class="text-success text-sm font-weight-bolder">+55%</span>
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="col-4 text-end">
                                            <div
                                                class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-7 mb-xl-0 mb-5">
                            <div class="card">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="col-10">
                                            <div class="numbers">
                                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Users
                                                </p>
                                                <h5 class="font-weight-bolder mb-0">
                                                    140
                                                    <span class="text-success text-sm font-weight-bolder">+3%</span>
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="col-4 text-end">
                                            <div
                                                class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-7 mb-xl-0 mb-5">
                            <div class="card">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="col-10">
                                            <div class="numbers">
                                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Live Properties</p>
                                                <h5 class="font-weight-bolder mb-0">
                                                    1,146
                                                    <span class="text-danger text-sm font-weight-bolder">-2%</span>
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="col-4 text-end">
                                            <div
                                                class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                                <i class="ni ni-paper-diploma text-lg opacity-10"
                                                    aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <h4 class="text-center my-1">
                            Recent Members
                        </h4>
                        <table class="table align-middle mb-0 bg-white">
                            <thead class="bg-light">
                                <tr>
                                    <th>Username</th>
                                    <th>Subject</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt=""
                                                style="width: 45px; height: 45px" class="rounded-circle" />
                                            <div class="ms-3">
                                                <p class="fw-bold mb-1">John Doe</p>
                                                <p class="text-muted mb-0">john.doe@gmail.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1">Software engineer</p>
                                        <p class="text-muted mb-0">IT department</p>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1">October 23, 2023</p>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://mdbootstrap.com/img/new/avatars/6.jpg"
                                                class="rounded-circle" alt="" style="width: 45px; height: 45px" />
                                            <div class="ms-3">
                                                <p class="fw-bold mb-1">Alex Ray</p>
                                                <p class="text-muted mb-0">alex.ray@gmail.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1">Consultant</p>
                                        <p class="text-muted mb-0">Finance</p>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1">October 23, 2023</p>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://mdbootstrap.com/img/new/avatars/7.jpg"
                                                class="rounded-circle" alt="" style="width: 45px; height: 45px" />
                                            <div class="ms-3">
                                                <p class="fw-bold mb-1">Kate Hunington</p>
                                                <p class="text-muted mb-0">kate.hunington@gmail.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1">Designer</p>
                                        <p class="text-muted mb-0">UI/UX</p>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1">October 23, 2023</p>
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Properties  -->
            <div class="col-6">
                <div class="card">
                    <h4 class="text-center my-1">
                        Recent Messages
                    </h4>
                </div>
                    <div class="container-fluid py-4">
                        <table class="table align-middle mb-0 bg-white">
                            <thead class="bg-light">
                                <tr>
                                    <th>Username</th>
                                    <th>Subject</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="ms-3">
                                                <p class="text-muted mb-0">Username</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1">Software engineer</p>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1">October 23, 2023</p>
                                    </td>
                                    <td>
                                        <a class="fw-normal mb-1" href="#">Edit</a>
                                        <a class="fw-normal mb-1" href="#">Delete</a>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="ms-3">
                                                <p class="text-muted mb-0">Username</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1">Consultant</p>
                                        <p class="text-muted mb-0">Finance</p>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1">October 23, 2023</p>
                                    </td>
                                    <td>
                                        <a class="fw-normal mb-1" href="#">Edit</a>
                                        <a class="fw-normal mb-1" href="#">Delete</a>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="ms-3">
                                                <p class="text-muted mb-0">Username</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1">Designer</p>
                                        <p class="text-muted mb-0">UI/UX</p>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1">October 23, 2023</p>
                                    </td>
                                    <td>
                                        <a class="fw-normal mb-1" href="#">Edit</a>
                                        <a class="fw-normal mb-1" href="#">Delete</a>
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                
                <div class="col">
                        <div class="card">
                            <h4 class="text-center my-1">
                                Recent Properties
                            </h4>
                        </div>
                        <div class="container-fluid py-4">
                            <table class="table align-middle mb-0 bg-white">
                                <thead class="bg-light">
                                    <tr>
                                        <th>Property Name</th>
                                        <th>Property Category</th>
                                        <th>Seller Username</th>
                                        <th>Added Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="ms-3">
                                                    <p class="text-muted mb-0">  </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-muted mb-0">House & Lot</p>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">Username</p>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">October 23, 2023</p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="ms-3">
                                                    <p class="text-muted mb-0">  </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">House & Lot</p>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">Username</p>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">October 23, 2023</p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="ms-3">
                                                    <p class="text-muted mb-0"> </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">Lot</p>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">Username</p>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">October 23, 2023</p>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<button onclick="openModal()">Open Modal</button>

<div class="modalContent" id= "modalContent">
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden = "true">
        <div class="close-btn" onclick="document.getElementById('modalContent').style.display = 'none'">&times;</div>

        <div class="signup">
            <form action="">
                <label for="chk" aria-hidden="true">Signup</label>
                <input type="text" name="txt" placeholder="User name" required = "">
                <input type="email" name="email" placeholder="Email" required = "">
                <input type="password" name="pswd" placeholder="Password" required = "">
                <button> Signup</button>
            </form>
        </div>

        <div class="login">
            <form action="">
                <label for="chk" aria-hidden="true">Login</label>
                <input type="email" name="email" placeholder="Email" required = "">
                <input type="password" name="pswd" placeholder="Password" required = "">
                <button>Login</button>
            </form>
        </div>
    </div>
</div>


<script>
    function openModal() {
        var modal = document.getElementById('modalContent');
        modal.style.display = 'flex';

        // Add an event listener to close the modal when clicking outside of it
        window.addEventListener('click', function (event) {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        });
    }
    function closeModal(){
        var modal =document.getElementById('modalContent');
        modal.style.display = 'none';
    }
</script>


<?php echo $this->endSection(); ?>

