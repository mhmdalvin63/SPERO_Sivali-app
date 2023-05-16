<style>
    nav{
        z-index: 99;
        background-color: transparent;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    .active>.page-link, .page-link.active {
        z-index: 3;
        color: var(--bs-pagination-active-color);
        background-color: #134B6E;
        border-color: var(--bs-pagination-active-border-color);
        border-radius: 20%;
        /* width: 120%; */
    }
    /* .page-item{
        border-radius: 20%;
    } */
</style>
@if ($paginator->hasPages())
<nav>
    <ul class="pagination">
        <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
            <span class="page-link" aria-hidden="true">‹</span>
        </li>
        <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
        <li class="page-item"><a class="page-link" href="http://127.0.0.1:8000/katalog?page=2">2</a></li>
        <li class="page-item">
            <a class="page-link" href="http://127.0.0.1:8000/katalog?page=2" rel="next" aria-label="Next »">›</a>
        </li>
    </ul>
</nav>
@endif
