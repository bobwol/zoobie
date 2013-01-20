
    <div id="info">
        <p>Double-click to edit a todo</p>
        <p>Written by <a href="https://github.com/trsenna">Thiago Senna</a></p>
    </div>


    <script type="text/template" id="item-template">
        <div class="view">
            <input class="toggle" type="checkbox" <%= completed ? 'checked' : '' %>>
            <label><%= title %></label>
            <button class="destroy"></button>
        </div>
        <input class="edit" value="<%= title %>">
    </script>

    <?php wp_footer(); // wp_footer ?>

</body>
</html>