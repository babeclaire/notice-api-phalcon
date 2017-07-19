{{ content() }}


<div class="container">
    <section id="content">
        {{ form('users/loggin', 'role': 'form') }}
            <h1>Login</h1>
            <div>
                 {{ text_field('email', 'class': "form-control") }}
            </div>
            <div>
            {{ password_field('password', 'class': "form-control") }}
            </div>
            <div>
            {{ submit_button('Login', 'class': 'btn btn-primary btn-large') }}
                <a>{{ link_to('signup', 'Sign Up') }}</a>
            </div>
        </form><!-- form -->
    </section><!-- content -->
</div><!-- container -->
