<div class="row">
        <table cols="" border ="0">
            <tr>
                <th>ID</th>
                <th>Author</th>
                <th>Mugshot</th>
                <th>Their Saying</th>
            </tr>
            {quotes}
            <tr>
                <th>{id}</th>
                <th>{who}</th>
                <th>{mug}</th>
                <th>{what}</th>
            </tr>
            {/quotes}
        </table>
        
        <a href='/admin/add'>Add a new quotation</a>
</div>