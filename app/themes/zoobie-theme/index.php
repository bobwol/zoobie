<?php get_header(); // Loads the header.php template. ?>

    <section id="todoapp">
        <header id="header">
            <h1><?php bloginfo( 'name' ); ?></h1>
            <input id="new-todo" placeholder="What needs to be done?" autofocus>
        </header>
        <section id="main">
            <input id="toggle-all" type="checkbox">
            <label for="toggle-all">Mark all as complete</label>
            <ul id="todo-list"></ul>
        </section>
        <footer id="footer"></footer>
    </section>

<?php get_footer(); // Loads the footer.php template. ?>





