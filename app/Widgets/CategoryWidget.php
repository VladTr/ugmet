<?php
// виджет для демонстрации категорий товаров
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
        // функция построения дерева по категориям
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
                    $html .= '    ' . get_tree($tree, $row['id']);
                    $html .= '</div>';
                }
            }
            return $html;
        }
        // строим иерархическое дерево категорий
        $html = get_tree($this->categories, 0);

        return view("widgets.category_widget", [
            'categories' => $html,
        ]);
    }
}