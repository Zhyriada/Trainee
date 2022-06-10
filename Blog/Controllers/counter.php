<?php

public function visitAllCount($postID)

    {
        return $this->db->column('SELECT sum(`col_view`) FROM `posts` WHERE `id` = ?',
            [$postID]);
    }

    public function visitViewCount($postID)
    {
        $this->db->upd('UPDATE `posts` SET `col_view` = `col_view` + 1 WHERE `id` = ?',
            [$postID]);
    }
