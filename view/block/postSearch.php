<form action="#" method="POST">
    <input class="post__seacth-input" type="text" placeholder="Найдётся всё!" name="search_input" value="<? echo $_REQUEST['search_input'] ?>">
    <select name="search_by">
        <?
            $search_by = $_POST['search_by'];
            switch ($search_by) {
                case 'search_by_date':
                    echo '<option value="search_by_name">По названию</option>
                        <option selected value="search_by_date">По дате</option>
                        <option value="search_by_view">По просмотрам</option>';
                    break;
                case 'search_by_view':
                    echo '<option value="search_by_name">По названию</option>
                    <option value="search_by_date">По дате</option>
                    <option selected value="search_by_view">По просмотрам</option>';
                    break;
                default:
                    echo '<option selected value="search_by_name">По названию</option>
                    <option value="search_by_date">По дате</option>
                    <option value="search_by_view">По просмотрам</option>';
            }
        ?>
    </select>
    <button class="post__seacth-button" type="submit" name="seacth-button">Найти</button>
</form>