<?= $this->getContent() ?>


<div class="container">
    <section id="content">
        <?= $this->tag->form(['users/loggin', 'role' => 'form']) ?>
            <h1>Login</h1>
            <div>
                 <?= $this->tag->textField(['email', 'class' => 'form-control']) ?>
            </div>
            <div>
            <?= $this->tag->passwordField(['password', 'class' => 'form-control']) ?>
            </div>
            <div>
            <?= $this->tag->submitButton(['Login', 'class' => 'btn btn-primary btn-large']) ?>
                <a><?= $this->tag->linkTo(['signup', 'Sign Up']) ?></a>
            </div>
        </form><!-- form -->
    </section><!-- content -->
</div><!-- container -->
