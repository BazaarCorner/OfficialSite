<?php

/*
 * The MIT License
 *
 * Copyright (c) 2015, Bazaar Corner
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace BazaarSite\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * BazaarSite\Controller\CategoryController
 *
 * @package BazaarSite\Controller
 * @author Gab Amba <gamba@gabbydgab.com>
 */
class CategoryController extends AbstractActionController
{
    public function indexAction()
    {
//        $this->catalogCategoryRepository();
//        $this->catalogProductFinder();
//        $this->catalogProductFinder()->hasBrand()->hasSku()->hasCategory();
        
        $category = $this->params('category');
        
        // This is a temporary hack (checking for proper solution)
        // To capture invalid route using 'member' as category
        // since 'member' is a module route and not a category
//        if ('member' === strtolower($category)) {
//            return $this->notFoundAction();
//        }
        
        $subcategory = $this->params('subcategory');        
        
        
        return new ViewModel();
    }
}
