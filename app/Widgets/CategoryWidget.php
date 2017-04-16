<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Category;

class CategoryWidget extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $categories = '';

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $this->categories=Category::all();

        function get_tree($tree, $parent_id) {
            $html = '';
            foreach ($tree as $row) {
                if ($row['parent_id'] == $parent_id) {
                    if($row['parent_id']==0){
                        $html .= "<div class='parent'>";
                    }
                    if($row['parent_id']!=0){
                        $html .= "<div class='child'>";
                    }

                    $html .= '' .'<a href="/category/'.$row['id'].' "> '.$row['name'].'</a>';
                    //$html .= '    ' .'<a href="server.php?id={$row[id`]}">'.$row['text'].'</a>';

                    $html .= '    ' . get_tree($tree, $row['id']);
                    $html .= '</div>';
                }
            }
            //$html.='</ul>';
            return $html;
        }

        $html = get_tree($this->categories, 0);



        return view("widgets.category_widget", [
            'categories' => $html,
        ]);
    }
}