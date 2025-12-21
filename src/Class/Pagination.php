<?php 
// Pagination.php
class Pagination {

    public static function createPagination($page, $perPage, $totalItems) {
        $totalPages = ceil($totalItems / $perPage);

        $pagination = [
            'current' => $page,
            'total' => $totalPages,
            'previous' => ($page > 1) ? $page - 1 : null,
            'next' => ($page < $totalPages) ? $page + 1 : null
        ];

        return $pagination;
    }
}
