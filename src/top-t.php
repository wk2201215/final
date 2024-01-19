<?php session_start(); ?>
<?php require 'default/header-top.php'; ?>
<main>
            <section class="py-5 text-center container">
                <div class="row py-lg-5">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <h3 class="fw-light">本のタイトルを入力!!</h3>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">タイトル</span>
                                <input type="text" id="formText" name="myFormText" class="form-control" placeholder="書類タイトルを入力" aria-label="books" aria-describedby="basic-addon1">
                            </div>
                            <button id="btn" class="btn btn-primary my-2">本を検索！</button>
                        <p>
                        </p>
                    </div>
                </div>
            </section>
            <div id="bookItem" class="album py-5 bg-light">
            </div>
        </main>
<?php require 'default/footer-top.php'; ?>
