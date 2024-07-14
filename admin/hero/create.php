<?php include '../layouts/header.php'; ?>

<div class="container-fluid py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-md-12 col-lg-7">
                <h4 class="mb-3 text-secondary">Admin - Create New Item</h4>
                <form action="create_action.php" method="post">
                    <div class="mb-3">
                        <label for="itemName" class="form-label">Item Name</label>
                        <input type="text" class="form-control" id="itemName" name="itemName" required>
                    </div>
                    <div class="mb-3">
                        <label for="itemCategory" class="form-label">Category</label>
                        <select class="form-select" id="itemCategory" name="itemCategory" required>
                            <option value="Fruits">Fruits</option>
                            <option value="Vegetables">Vegetables</option>
                            <option value="Dairy">Dairy</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Item</button>
                </form>
            </div>
            <div class="col-md-12 col-lg-5">
                    <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active rounded">
                                <img src="../assets/img/fruits.jpg" class="img-fluid w-100 h-100 bg-secondary rounded"
                                    alt="First slide">
                                <a href="#" class="btn px-4 py-2 text-white rounded">Fruits</a>
                            </div>
                            <div class="carousel-item rounded">
                                <img src="../assets/img/vegetables.jpeg" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                                <a href="#" class="btn px-4 py-2 text-white rounded">Vegetables</a>
                            </div>
                            <div class="carousel-item rounded">
                                <img src="../assets/img/dairy.jpg" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                                <a href="#" class="btn px-4 py-2 text-white rounded">Dairy</a>
                            </div>
                        </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../layouts/footer.php'; ?>
