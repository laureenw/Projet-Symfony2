<?php

namespace Fallen\FallenBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Fallen\FallenBundle\Form\ContactType;
use Fallen\FallenBundle\Form\ContactTypeEn;

class DefaultController extends Controller {

    /**
     * @Route("/",name="fallen_index")
     * @Template()
     */
    public function indexAction() {
        return $this->render('FallenBundle:Default:accueil.html.twig');
    }
    
    /**
     * @Route("/home",name="fallen_home")
     * @Template()
     */
    public function homeAction() {
        return $this->render('FallenBundle:Default:home.html.twig');
    }
    
    /**
     * @Route("/contact", name="fallen_contact")
     * @Template()
     */
    public function contactAction(Request $request)
    {
        $form = $this->createForm(new ContactType());
        $form->handleRequest($request);

        if ($form->isValid()) {
            $mailer = $this->get('mailer');
            
            /*$data = $form->getData();
            $message = \Swift_Message::newInstance()
                ->setContentType('text/html')
                ->setSubject($data['sujet'])
                ->setFrom($data['email'])
                ->setTo('walther.laureen@gmail.com')
                ->setBody($data['message']);
            $this->get('mailer')->send($message);*/

            // .. setup a message and send it
            // http://symfony.com/doc/current/cookbook/email.html

            $request->getSession()->getFlashBag()->set('notice', 'Le message a bien été envoyé !');
            return $this->render('FallenBundle:Default:index.html.twig');
            //return new RedirectResponse($this->render('FallenBundle:Default:index.html.twig'));
        }

        return array('form' => $form->createView());
    }   
    
    /**
     * @Route("/contact_en", name="fallen_contact_en")
     * @Template()
     */
    public function contact_enAction(Request $request)
    {
        $form = $this->createForm(new ContactTypeEn());
        $form->handleRequest($request);

        if ($form->isValid()) {
            $mailer = $this->get('mailer');
            
            /*$data = $form->getData();
            $message = \Swift_Message::newInstance()
                ->setContentType('text/html')
                ->setSubject($data['sujet'])
                ->setFrom($data['email'])
                ->setTo('walther.laureen@gmail.com')
                ->setBody($data['message']);
            $this->get('mailer')->send($message);*/

            // .. setup a message and send it
            // http://symfony.com/doc/current/cookbook/email.html

            $request->getSession()->getFlashBag()->set('notice', 'The message has been sent !');
            return $this->render('FallenBundle:Default:home.html.twig');
            //return new RedirectResponse($this->render('FallenBundle:Default:index.html.twig'));
        }

        return array('form' => $form->createView());
    }   
    
    /**
     * @Route("/photos", name="fallen_photos")
     * @Template()
     */
    public function photosAction() {
              
        
        $dir = 'img/gallery/*.{jpg,jpeg,gif,png,bmp}';
        $files = glob($dir,GLOB_BRACE);
       
        //nom du répertoire contenant les images à afficher
        $nom_repertoire = 'img/gallery';

        //on ouvre le repertoire
        $pointeur = opendir($nom_repertoire);
        $i = 0;

        //on les stocke les noms des fichiers des images trouvées, dans un tableau
        while ($fichier = readdir($pointeur))
        {
        if (substr($fichier, -3) == "gif" || substr($fichier, -3) == "jpg" || substr($fichier, -3) == "png"
        || substr($fichier, -4) == "jpeg" || substr($fichier, -3) == "PNG" || substr($fichier, -3) == "GIF"
        || substr($fichier, -3) == "JPG")
        {
        $tab_image[$i] = $fichier;
        $i++;
        }
        }

        //on ferme le répertoire
        closedir($pointeur);


        //affichage des images (en 60 * 60 ici)
        for ($j=0;$j<=$i-1;$j++)
        {
        $image = $nom_repertoire.'/'.$tab_image[$j];

        //echo $image;

        }
        
        return $this->render('FallenBundle:Default:photos.html.twig', array('image' => $image, 'files' => $files));

    }
    
    protected function getUploadRootDir()
    {
        // le chemin absolu du répertoire où les documents uploadés doivent être sauvegardés
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // on se débarrasse de « __DIR__ » afin de ne pas avoir de problème lorsqu'on affiche
        // le document/image dans la vue.
        return 'img/gallery';
    }
    
    /**
     * @Route("/photos_en", name="fallen_photos_en")
     * @Template()
     */
    public function photos_enAction(Request $request) {
        
        $form = $this->createFormBuilder()
                ->add('file', 'file')
                ->getForm();
        
        $form->handleRequest($request);
        if ($form->isValid()){
            $uploads_dir = '/../../../../web/img/gallery';
            $file = $form->get('file');
            $name = $file->getData()->getClientOriginalName();
            $file->getData()->move($this->getUploadRootDir(), $name);
        }

        $dir = 'img/gallery/*.{jpg,jpeg,gif,png,bmp}';
        $files = glob($dir,GLOB_BRACE);
       
        

        //nom du répertoire contenant les images à afficher
        $nom_repertoire = 'img/gallery';

        //on ouvre le repertoire
        $pointeur = opendir($nom_repertoire);
        $i = 0;

        //on les stocke les noms des fichiers des images trouvées, dans un tableau
        while ($fichier = readdir($pointeur))
        {
        if (substr($fichier, -3) == "gif" || substr($fichier, -3) == "jpg" || substr($fichier, -3) == "png"
        || substr($fichier, -4) == "jpeg" || substr($fichier, -3) == "PNG" || substr($fichier, -3) == "GIF"
        || substr($fichier, -3) == "JPG")
        {
        $tab_image[$i] = $fichier;
        $i++;
        }
        }

        //on ferme le répertoire
        closedir($pointeur);


        //affichage des images (en 60 * 60 ici)
        for ($j=0;$j<=$i-1;$j++)
        {
        $image = $nom_repertoire.'/'.$tab_image[$j];

        //echo $image;

        }
        
        
        return $this->render('FallenBundle:Default:photos_en.html.twig', array('image' => $image, 'files' => $files, 'formulaire' => $form->createView()));

    }
    
   /**
     * @Route("/admin", name="administration")
     * @Template()
     */
    public function adminAction(Request $request)
    {
        $form = $this->createFormBuilder()
                ->add('file', 'file')
                ->getForm();
        
        $form->handleRequest($request);
        if ($form->isValid()){
            $uploads_dir = '/../../../../web/img/gallery';
            $file = $form->get('file');
            $name = $file->getData()->getClientOriginalName();
            $file->getData()->move($this->getUploadRootDir(), $name);
        }

        
        return $this->render('FallenBundle:Default:admin.html.twig', array('formulaire' => $form->createView()));

    }
    
    
}
