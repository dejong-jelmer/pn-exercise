<?php    
    namespace App\Controller;
    
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Component\HttpFoundation\Request;

    use Repository\Test;
    use Repository\ArrayFactory;
    
    class HomeController extends AbstractController
    {
         /**
         * @Route("/")
         */
        public function index()
        {
            $test = new Test; 
            $cms1 = ArrayFactory::getCmsArrayByNumber(1);
            $cms2 = ArrayFactory::getCmsArrayByNumber(2);

            $result1 = $test->convert_array(ArrayFactory::getBooksArray());
            $result2 = $test->merge_array($cms1, $cms2);
            return $this->render('index.html.twig',[ 
                'result1' => $result1,
                'result2' => $result2,
            ]);
        }
    }
