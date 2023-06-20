

<body>
    <div class="container">
        <form method="post" action="resources/views/delete">
            <div class="title">
                <h2>Product List</h2>
                <div>
                    <button type="button" class="btn btn-success btn-size" onclick="redirectToPage()">
                        ADD
                    </button>
                    <button type="submit" class="btn btn-danger btn-size" value="delete" name="but_delete" id="delete-product-btn" disabled>
                        MASS DELETE
                    </button>
                </div>
            </div>
            <hr>
            <div class="row isotope-grid main-grid">
                <?= $results ?>
            </div>
        </form>
    </div>
    <?php include("resources/views/partials/footer.php"); ?>
    <script>
        function redirectToPage() {
            window.location.href = "resources/views/add-product";
        }
    </script>
</body>