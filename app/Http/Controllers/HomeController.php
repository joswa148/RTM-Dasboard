<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use App\Models\Logo;

class HomeController extends Controller
{
    public function index()
    
    {
        $pageTitle = "Trademark Registration Dubai & UAE, Brand registration UAE | Right TradeMark";
      
        $metaDescription = "How to Register a Brand in the UAE? Get Right Trademark help for Trademark Registration in Dubai & UAE. Trusted trademark consultants for brand registration UAE.";
        $canonical = "https://right-trademark.com/";
        $metaKeyWord = "Trademark Registration, Brand registration UAE, Trademark consultant UAE, Trademark renewal, UAE trademark search, Trademark Registration UAE, Trademark registration services, Trademark Registration Dubai, Dubai trademark registration, UAE trademark registration, How to register a brand in UAE, Register a trademark in UAE, Intellectual property UAE";
        $logos = Cache::remember('trusted_logos', 86400, function () {
            return Logo::active()->ordered()->get()->unique('image_path')->values();
        });
        return view('index',compact('pageTitle','metaDescription','canonical','metaKeyWord', 'logos'));
    }
    
    
    
       public function companyindubai()
    
    {
        $pageTitle = "How to Register a Brand in UAE - Brand Registration UAE";
      
        $metaDescription = "Learn how to register your brand in the UAE with our guide on the trademark registration process, required documents, and tips to protect your brand rights.";
        $canonical = "https://right-trademark.com/blog/how-to-register-a-brand-in-dubai-uae";
        $metaKeyWord = "Trademark registration, Register a trademark in UAE, UAE trademark search, dubai trademark search, Dubai trademark registration, How to register a brand in UAE, Trademark consultant UAE, Trademark Registration UAE, Trademark Registration Dubai, Brand registration UAE, Trademark registration services, Trademark search";
        return view('blogs.companyindubai',compact('pageTitle','metaDescription','canonical','metaKeyWord'));
    }
    
    
    
        public function uaetrademarksearch()
    
    {
        $pageTitle = "UAE Trademark Search in Dubai – Check Brand Availability & Avoid Conflicts | Right Trademark";
      
        $metaDescription = "Conduct a Dubai trademark search in the UAE to verify brand name availability before registration. Right Trademark provides Expert trademark registration services in the UAE.";
        $canonical = "https://right-trademark.com/blog/trademark-search-dubai-uae";
        $metaKeyWord = "Trademark registration, Register a trademark in UAE, UAE trademark search, dubai trademark search, Dubai trademark registration, How to register a brand in UAE, Trademark consultant UAE, Trademark Registration UAE, Trademark Registration Dubai, Brand registration UAE, Trademark registration services";
        return view('blogs.uaetrademarksearch',compact('pageTitle','metaDescription','canonical','metaKeyWord'));
    }
    
           public function uaetmconsultant()
    
    {
        $pageTitle = "Trademark Consultant UAE | Expert Trademark Services";
      
        $metaDescription = "Hire the best trademark consultant in the UAE for trademark search, filing, registration, and brand protection. Fast, reliable, and professional trademark registration services.";
        $canonical = "https://right-trademark.com/blog/trademark-consultant-uae";
        $metaKeyWord = "Trademark registration, Register a trademark in UAE, UAE trademark search, dubai trademark search, Dubai trademark registration, How to register a brand in UAE, Trademark consultant UAE, Trademark Registration UAE, Trademark Registration Dubai, Brand registration UAE, Trademark registration services";
        return view('blogs.uaetmconsultant',compact('pageTitle','metaDescription','canonical','metaKeyWord'));
    }
    
    
    public function TrademarkuaeMythsandfacts()
    
    {
        $pageTitle = "Trademark Registration in UAE: Myths & Facts Explained";
      
        $metaDescription = "Know the truth about trademark registration in UAE. We bust common myths and explain real facts, process, cost, validity, and legal protection.";
        $canonical = "https://right-trademark.com/blog/trademark-uae-myths-and-facts";
        $metaKeyWord = "Trademark UAE myths and facts, Trademark registration UAE, UAE trademark registration, Trademark myths in UAE, Facts about trademark registration UAE, Is trademark mandatory in UAE, UAE trademark law, Trademark protection in UAE, Register trademark in UAE";
        return view('blogs.trademarkuaemythsandfacts',compact('pageTitle','metaDescription','canonical','metaKeyWord'));
    }
    
    
    
    public function TrademarkRegistrationProcessCost()
    
    {
        $pageTitle = "UAE Trademark Registration - Register a Trademark in UAE";
      
        $metaDescription = "Learn the UAE trademark registration process, fees, and timeline. Get expert guidance to protect your brand in the UAE quickly and legally.";
        $canonical = "https://right-trademark.com/blog/how-to-register-a-trademark-in-dubai-uae";
        $metaKeyWord = "Trademark registration, Register a trademark in UAE, UAE Trademark Registration, Trademark Registration UAE, Trademark registration services, trademark services UAE, trademark registration UAE cost, UAE trademark process, trademark registration fees UAE, Trademark Registration Dubai, Trademark search";
        return view('blogs.trademarkregistrationprocesscost',compact('pageTitle','metaDescription','canonical','metaKeyWord'));
    }
    
    
    
    public function TrademarklLogovsNamevsTagline()
    
    {
        $pageTitle = "Trademark: Logo vs Name vs Tagline – Key Differences Explained";
      
        $metaDescription = "Understand the difference between trademarking a logo, brand name, and tagline. Learn which trademark offers better legal protection for your business and brand identity.";
        $canonical = "https://right-trademark.com/blog/trademark-logo-vs-name-vs-tagline";
        $metaKeyWord = "Trademark logo vs name vs tagline, Logo trademark vs brand name, Tagline trademark registration, What to trademark first, Trademark differences explained, Brand name vs logo trademark, Business trademark guide, Trademark protection for brand";
        return view('blogs.trademarkllogovsnamevstagline',compact('pageTitle','metaDescription','canonical','metaKeyWord'));
    }   


    public function TrademarkObjectionuae()
    
    {
        $pageTitle = "Trademark Objection Process in the UAE | Complete Guide";
      
        $metaDescription = "Learn about the trademark objection process in the UAE, including opposition rules, timelines, and how to protect your brand rights effectively.";
        $canonical = "https://right-trademark.com/blog/trademark-objection-uae";
        $metaKeyWord = "Trademark objection UAE, Trademark opposition UAE, UAE trademark process, Trademark registration UAE, Ministry of Economy trademark";
        return view('blogs.trademarkobjectionuae',compact('pageTitle','metaDescription','canonical','metaKeyWord'));
    }   


    public function TrademarkOnlineBrandGrowth()
    
    {
        $pageTitle = "Why Trademark Registration Is Essential for Online Brand Growth";
      
        $metaDescription = "Trademark registration protects your online brand from legal issues, builds customer trust, and strengthens long-term business growth. Learn why it is essential for digital businesses.";
        $canonical = "https://right-trademark.com/blog/trademark-registration-for-online-brand-growth";
        $metaKeyWord = "online brand protection, brand trademark benefits, trademark for digital business, Trademark registration, protect online business name";
        return view('blogs.trademarkonlinebrandgrowth',compact('pageTitle','metaDescription','canonical','metaKeyWord'));
    }   
    
    
     public function TrademarksRegistrationDubai()
    
    {
        $pageTitle = "Register a Trademark in UAE - Trademark Registration Services";
      
        $metaDescription = "Register your trademark in Dubai, UAE with expert trademark registration services. Get complete guidance for trademark registration in UAE today.";
        $canonical = "https://right-trademark.com/blog/how-to-register-a-trademark-in-dubai-uae";
        $metaKeyWord = "Trademark Registration, Trademark consultant UAE, Trademark Registration UAE, Trademark registration services, Trademark Registration Dubai, Dubai trademark registration, UAE trademark registration, How to register a trademark in UAE, Register a trademark in UAE, Steps to Trademark Registration in UAE, Trademarks Registration Fee in UAE";
        return view('blogs.trademarksregistrationdubai',compact('pageTitle','metaDescription','canonical','metaKeyWord'));
    }   
    
    
       public function IntellectualPropertyuae()
    
    {
        $pageTitle = "Intellectual property UAE, Trademark Consultant";
      
        $metaDescription = "Intellectual Property UAE services by Right Trademark UAE. Expert trademark, copyright, patent & IP registration solutions with full legal support.";
        $canonical = "https://right-trademark.com/blog/intellectual-property-registration-uae";
        $metaKeyWord = "Intellectual Property UAE, Intellectual Property Rights UAE, IP Registration UAE, IP Protection UAE, UAE IP Law, Intellectual Property";
        return view('blogs.intellectualpropertyuae',compact('pageTitle','metaDescription','canonical','metaKeyWord'));
    }
    
    
    
    

     public function india()
    {
        $pageTitle = "Trademark Registration India |Trademark registration services";
      
        $metaDescription = "Register your trademark in India. Our comprehensive service includes name search, class guidance, application filing, and ongoing updates until registration is complete.";
        $canonical = "https://right-trademark.com/trademark-registration";
        $metaKeyWord = "Trademark consultant UAE, Trademark Registration, Trademark registration services, Brand registration, Trademark search, Trademark renewal, Intellectual property";
        return view('country.india',compact('pageTitle','metaDescription','canonical','metaKeyWord'));
    }

     public function bangladesh()
    {
        $canonical = "https://right-trademark.com/trademark-registration";
        $metaKeyWord = "Trademark consultant UAE, Trademark Registration, Trademark registration services, Brand registration, Trademark search, Trademark renewal, Intellectual property";
        return view('country.bangladesh',compact('canonical','metaKeyWord'));
    }
    
     public function australia()
    {
        $pageTitle = "Trademark Registration in Australia | Right Trademark";
        $metaDescription = "Register your trademark in Australia with Right Trademark. Expert support for trademark filing, brand protection and IP services in Australia.";
        $canonical = "https://right-trademark.com/trademark-registration";
        $metaKeyWord = "Australia trademark registration, brand registration Australia, Trademark Registration";
        return view('country.australia',compact('pageTitle','metaDescription','canonical','metaKeyWord'));
    }

      public function bahrain()
    {   
        
        $pageTitle = "Trademark Registration Bahrain | Trademark consultant UAE";
      
        $metaDescription = "Comprehensive trademark registration services in Bahrain, from name search and classification to filing, licensing, and approvals. Simple, reliable brand protection.";
        $canonical = "https://right-trademark.com/trademark-registration";
        $metaKeyWord = "Trademark consultant UAE, Trademark Registration, Trademark registration services, Brand registration, Trademark search, Trademark renewal, Intellectual property";
        return view('country.bahrain',compact('pageTitle','metaDescription','canonical','metaKeyWord'));
    }

       public function benelux()
    {
        $canonical = "https://right-trademark.com/trademark-registration";
        return view('country.benelux',compact('canonical'));
    }

       public function canada()
    {
        $canonical = "https://right-trademark.com/trademark-registration";
        return view('country.canada',compact('canonical'));
    }  

        public function chines()
    {
        $canonical = "https://right-trademark.com/trademark-registration";
        $metaKeyWord = "Trademark consultant UAE, Trademark Registration, Trademark registration services, Brand registration, Trademark search, Trademark renewal, Intellectual property";
        return view('country.chines',compact('canonical','metaKeyWord'));
    }

       public function eu()
    {
        $canonical = "https://right-trademark.com/trademark-registration";
        return view('country.eu',compact('canonical'));
    }
    
       public function france()
    {
        $canonical = "https://right-trademark.com/trademark-registration";
        return view('country.france',compact('canonical'));
    }
    
          public function germany()
    {
        $canonical = "https://right-trademark.com/trademark-registration";
        return view('country.germany',compact('canonical'));
    }
    
         public function hongu()
    {
        return view('country.hongu');
    }
    
        public function indonesia()
    {
        $canonical = "https://right-trademark.com/trademark-registration";
        $metaKeyWord = "Trademark consultant UAE, Trademark Registration, Trademark registration services, Brand registration, Trademark search, Trademark renewal, Intellectual property";
        return view('country.indonesia',compact('canonical','metaKeyWord'));
    }
    
        public function ireland()
    {
        $canonical = "https://right-trademark.com/trademark-registration";
        return view('country.ireland',compact('canonical'));
    }

         public function italy()
    {
        $canonical = "https://right-trademark.com/trademark-registration";
        return view('country.italy',compact('canonical'));
    }

         public function japan()
    {
        $canonical = "https://right-trademark.com/trademark-registration";
        $metaKeyWord = "Trademark consultant UAE, Trademark Registration, Trademark registration services, Brand registration, Trademark search, Trademark renewal, Intellectual property";
        return view('country.japan',compact('canonical','metaKeyWord'));
    }

        public function kuwait()
    {
        $pageTitle = "Trademark Registration Kuwait | Trademark consultant UAE";
      
        $metaDescription = "Complete trademark registration services in Kuwait, name search, class advice, application filing & approvals. All-inclusive, hassle-free brand protection.";
        $canonical = "https://right-trademark.com/trademark-registration";
        $metaKeyWord = "Trademark consultant UAE, Trademark Registration, Trademark registration services, Brand registration, Trademark search, Trademark renewal, Intellectual property";
        return view('country.kuwait',compact('pageTitle','metaDescription','canonical','metaKeyWord'));
    }

      public function malasiya()
    {
         $canonical = "https://right-trademark.com/trademark-registration";
         $metaKeyWord = "Trademark consultant UAE, Trademark Registration, Trademark registration services, Brand registration, Trademark search, Trademark renewal, Intellectual property";
        return view('country.malasiya',compact('canonical','metaKeyWord'));
    }

      public function mexico()
    {   
        $canonical = "https://right-trademark.com/trademark-registration";
        return view('country.mexico',compact('canonical'));
    }

      public function newzealand()
    {   
        $canonical = "https://right-trademark.com/trademark-registration";
        return view('country.newzealand',compact('canonical'));
        
    }

     public function norwayt()
    {
        $canonical = "https://right-trademark.com/trademark-registration";
        return view('country.norwayt',compact('canonical'));
    }

    public function oman()
    {
        $pageTitle = "Trademark Registration Oman |Trademark consultant UAE";
      
        $metaDescription = "Easily register your trademark in Oman, from class guidance and name clearance to filing and updates, ensuring full protection and compliance.";
        $canonical = "https://right-trademark.com/trademark-registration";
        $metaKeyWord = "Trademark consultant UAE, Trademark Registration, Trademark registration services, Brand registration, Trademark search, Trademark renewal, Intellectual property";
        return view('country.oman',compact('pageTitle','metaDescription','canonical','metaKeyWord'));
    }

     public function qatar()
    {
        $pageTitle = "Trademark Registration Qatar |Quick, Compliant & Reliable";
      
        $metaDescription = "Need trademark registration in Qatar? We handle name clearance, classes, filings & government approvals so your brand gets full protection smoothly and reliably.";
        $canonical = "https://right-trademark.com/trademark-registration";
        $metaKeyWord = "Trademark consultant UAE, Trademark Registration, Trademark registration services, Brand registration, Trademark search, Trademark renewal, Intellectual property";
        return view('country.qatar',compact('pageTitle','metaDescription','canonical','metaKeyWord'));
    }

         public function russia()
    {
        $canonical = "https://right-trademark.com/trademark-registration";
        $metaKeyWord = "Trademark consultant UAE, Trademark Registration, Trademark registration services, Brand registration, Trademark search, Trademark renewal, Intellectual property";
        return view('country.russia',compact('canonical','metaKeyWord'));
    }


    public function singapore()
    {
        $pageTitle = "Trademark Registration Singapore | Trademark registration services";
      
        $metaDescription = "Secure your brand in Singapore. Our all-inclusive service encompasses trademark search, application filing, class advice, and regular updates until registration is complete.";
        $canonical = "https://right-trademark.com/trademark-registration";
        $metaKeyWord = "Trademark consultant UAE, Trademark Registration, Trademark registration services, Brand registration, Trademark search, Trademark renewal, Intellectual property";
        return view('country.singapore',compact('pageTitle','metaDescription','canonical','metaKeyWord'));
    }

     public function southkorea()
    {
        $pageTitle = "Trademark Registration South Korea |Trademark registration services";
      
        $metaDescription = "Easily register your trademark in South Korea. Our comprehensive service includes name search, class guidance, application filing, and updates through to registration.";
        $canonical = "https://right-trademark.com/trademark-registration";
        $metaKeyWord = "Trademark consultant UAE, Trademark Registration, Trademark registration services, Brand registration, Trademark search, Trademark renewal, Intellectual property";
        return view('country.southkorea',compact('pageTitle','metaDescription','canonical','metaKeyWord'));
    }

    public function spain()
    {
        $canonical = "https://right-trademark.com/trademark-registration";
        return view('country.spain',compact('canonical'));
    }
     
      public function switzerland()
    {
        $canonical = "https://right-trademark.com/trademark-registration";
        return view('country.switzerland',compact('canonical'));
    }
    
      public function sauthi()
    {
        return view('country.sauthi');
    }  
     
      public function thailand()
    {
        $canonical = "https://right-trademark.com/trademark-registration";
        $metaKeyWord = "Trademark consultant UAE, Trademark Registration, Trademark registration services, Brand registration, Trademark search, Trademark renewal, Intellectual property";
        return view('country.thailand',compact('canonical','metaKeyWord'));
    }
    
    public function uae()
    {
        // $pageTitle = "Trademark Registration UAE | Trademark consultant UAE";
        
        $pageTitle = "Trademark Registration UAE - Right Trademark";
        $metaDescription = "Register your trademark in UAE with Right Trademark. Expert Trademark Consultants in Dubai offering complete services for Trademark Registration UAE, Brand Registration UAE, and professional guidance on how to register a brand in the UAE.";
        
        $canonical = "https://right-trademark.com/trademark-registration-uae";
        $metaKeyWord = "Trademark Registration UAE, Register a trademark in UAE, UAE Trademark Registration, Dubai Trademark Registration, How to register a brand in UAE";
        return view('country.uae',compact('pageTitle','metaDescription','canonical','metaKeyWord'));
    }

       public function uk()
    {
        $canonical = "https://right-trademark.com/trademark-registration";
        return view('country.uk',compact('canonical'));
    }

    
       public function usa()
    {
        
        $canonical = "https://right-trademark.com/trademark-registration";
        return view('country.usa',compact('canonical'));
    }

      public function contact()
    {
        return view('contact');
    }

      public function review()
    {
        return view('review');
    }

     public function register()
    {
        $pageTitle = "Dubai Trademark Registration – Expert UAE Trademark Services";
      
        $metaDescription = "Register your trademark in the UAE with Right Trademark. We offer services for Trademark Registration in Dubai, UAE, including brand registration by expert trademark consultants in the UAE.";
        $canonical = "https://right-trademark.com/trademark-registration";
        $metaKeyWord = "Trademark Registration, Brand registration UAE, Trademark consultant UAE, Trademark Registration UAE, Dubai trademark registration";
        
        return view('register',compact('pageTitle','metaDescription','canonical','metaKeyWord'));
    }
    
      public function watch()
    {
        $pageTitle = "Trademark Watch | Right Trademark";
        $metaDescription = "Stay ahead with Trademark Watch. Get alerts on new filings, infringements, and maintain full control over your trademark’s status.";
        $canonical = "https://right-trademark.com/trademark-watch";
        return view('watch',compact('pageTitle','metaDescription','canonical'));
    }
    
      public function trademark()
    {   
        $pageTitle = "International Trademark Protection | Right Trademark";
        $metaDescription = "Expand your brand’s protection globally with our international trademark solutions, helping you secure rights in multiple countries efficiently.";
        $canonical = "https://right-trademark.com/international-trademark";
        return view('trademark',compact('pageTitle','metaDescription','canonical'));
    }
    
     public function search()
    {
        $pageTitle = "Dubai, UAE Trademark search | Right Trademark";
      
        $metaDescription = "Conduct a UAE trademark search to check brand name or logo availability. Ensure legal protection and avoid conflicts before registration.";
        $canonical = "https://right-trademark.com/trademark-search";
        $metaKeyWord = "Trademark Search, Trademark Registration, Brand registration UAE, Trademark consultant UAE, Trademark Registration UAE, Dubai trademark registration,UAE Trademark Search, Dubai Trademark Search";
        return view('search',compact('pageTitle','metaDescription','canonical','metaKeyWord'));
    }
    
     public function renewal()
    {   
        $pageTitle = "Trademark Renewal Dubai, UAE - Right Trademark";
        $metaDescription = "Ensure continuous protection for your brand with Right Trademark’s expert trademark renewal service in the UAE. Avoid cancellations, legal risks, and penalties with efficient renewal reminders, accurate filings, and hassle-free approval.";
        $canonical = "https://right-trademark.com/trademark-renewal";
        $metaKeyWord = "Trademark Renewal, Trademark Registration, Brand registration UAE, Trademark consultant UAE, Trademark Renewal UAE, Trademark Renewal Dubai";
        return view('renewal',compact('pageTitle','metaDescription','canonical','metaKeyWord'));
    }
    
     public function about()
    {
        return view('about');
    }
    
      public function revival()
    {
        $pageTitle = "Trademark Renewal Dubai,  Restore Your Trademark Rights";
        $metaDescription = "Renew your trademark in the UAE with Right Trademark. Expert Trademark Renewal Services in Dubai and across the UAE to ensure your brand remains protected and compliant.";
        $canonical = "https://right-trademark.com/trademark-revival";
        $metaKeyWord = "Trademark Revival Services, Brand registration UAE, Right Trademark, Trademark consultant UAE, Trademark registration services";
        return view('revival',compact('pageTitle','metaDescription','canonical','metaKeyWord'));
    }
    
      public function officeaction()
    {
        $pageTitle = "Trademark Office Actions | Resolve Objections & Secure Your Application";
        $metaDescription = "Facing office objections or clarifications in your trademark application? We provide expert responses to refusals, substantive and non-substantive issues, ensuring your brand’s protection and smoother registration.";
        $metaKeyWord = "Trademark Statement of Use Filing, Brand registration UAE, Right Trademark, Trademark consultant UAE, Trademark registration services";
        return view('officeaction',compact('pageTitle','metaDescription','metaKeyWord'));
    }
    
         public function statementuse()
    {
        $pageTitle = "Trademark Statement of Use Filing | Right Trademark";
        $metaDescription = "File your Statement of Use to show real usage of your trademark. Avoid abandonment, secure full protection, and ensure legal rights with our compliant filing services.";
        $metaKeyWord = "Trademark Statement of Use Filing, Brand registration UAE, Right Trademark, Trademark consultant UAE, Trademark registration services";
        return view('statementuse',compact('pageTitle','metaDescription','metaKeyWord'));
    }
         public function extensionuse()
    {
        $pageTitle = "Trademark Extension | Reserve Your Brand Name";
        $metaDescription = "Secure your trademark even before launch. With our Extension of Use service, get extra time to prove commercial use and keep your application active and protected.";
        $metaKeyWord = "Trademark Extension, Brand registration UAE, Right Trademark, Trademark consultant UAE, Trademark registration services";
        return view('extensionuse',compact('pageTitle','metaDescription','metaKeyWord'));
    }
    
         public function opposition()
    {
        $pageTitle = "Trademark Oppositions UAE | Trademark consultant UAE";
        $metaDescription = "Submit and defend trademark oppositions in the UAE to stop conflicting or misleading applications. Get expert guidance on filing, legal evidence, & protecting your mark’s exclusivity.";
        $metaKeyWord = "Trademark Oppositions UAE, Brand registration UAE, Right Trademark, Trademark consultant UAE, Trademark registration services";
        return view('opposition',compact('pageTitle','metaDescription','metaKeyWord'));
    }
    
         public function litigation()
    {
        $pageTitle = "Trademark Litigation Services | Brand registration UAE";
        $metaDescription = "Resolve trademark disputes with expert litigation support. We offer enforcement, infringement defense, opposition & cancellation proceedings, cease-and-desist actions, and full legal representation to protect your brand.";
        $metaKeyWord = "Trademark Litigation Services, Brand registration UAE, Right Trademark, Trademark consultant UAE, Trademark registration services";
        return view('litigation',compact('pageTitle','metaDescription','metaKeyWord'));
    }
    
          public function brand()
    {
        $pageTitle = "Brand Monitoring UAE | Trademark Watch & Protection Services – Right Trademark";
        $metaDescription = "Safeguard your brand with expert brand monitoring services in the UAE and Dubai. Monitor filings, detect infringements, and protect your trademark 24/7 with Right Trademark.";
        $canonical = "https://right-trademark.com/brand-monitoring";
        $metaKeyWord = "Brand Monitoring UAE, Trademark Watch & Protection Services";
        return view('brand',compact('pageTitle','metaDescription','canonical','metaKeyWord'));
    }
    
          public function ownership()
    {
        $pageTitle = "Trademark Ownership Transfer UAE | Right Trademark";
        $metaDescription = "Transfer trademark ownership in the UAE & Dubai with Right Trademark.";
        $canonical = "https://right-trademark.com/brand-monitoring";
        $metaKeyWord = "https://right-trademark.com/trademark-ownership-transfer";
        return view('ownership',compact('pageTitle','metaDescription','canonical','metaKeyWord'));
    }
 
       public function cease()
    {
        $pageTitle = "Cease & Desist Letter for Trademark Infringement UAE | Right Trademark";
        $metaDescription = "Protect your brand in the UAE & Dubai. Get expert help from Right Trademark for issuing or responding to a cease & desist letter regarding trademark infringement, unauthorized use or brand misuse.";
        $canonical = "https://right-trademark.com/cease-desist-tetter";
        $metaKeyWord = "Cease & Desist Letter , Right Trademark";
        return view('cease',compact('pageTitle','metaDescription','canonical','metaKeyWord'));
    }
    
         public function certificate()
    {   
        $pageTitle = "Trademark Registration Certificate UAE | Right Trademark";
        $metaDescription = "Receive your official trademark registration certificate in the UAE with Right Trademark. Expert assistance to obtain your UAE Trademark Certificate and secure your brand’s legal protection.";
        $canonical = "https://right-trademark.com/trademark-certificate";
        $metaKeyWord = "Trademark Registration Certificate UAE, Right Trademark, Trademark Registration";
        return view('certificate',compact('pageTitle','metaDescription','canonical','metaKeyWord'));
    }
    
         public function mainland()
    {   
        $canonical = "https://right-trademark.com/mainland-company-registration";
        return view('mainland',compact('canonical'));
    }
    
         public function freezone()
    {
        $canonical = "https://right-trademark.com/free-zone-company-setup";
        return view('freezone',compact('canonical'));
    }
    
          public function offshore()
    {
        $canonical = "https://right-trademark.com/offshore-company-incorporation";
        return view('offshore',compact('canonical'));
    }
    
           public function license()
    {
        $canonical = "https://right-trademark.com/trade-license-assistance";
        return view('license',compact('canonical'));
    }
     
            public function vattax()
    {
        $pageTitle = "VAT & Corporate Tax Registration UAE | Right Trademark";
        $metaDescription = "VAT & Corporate Tax Registration in the UAE helps protect your business from fines, ensures financial transparency, and boosts investor confidence.";
        $canonical = "https://right-trademark.com/vat-tax-registration";
        return view('vattax',compact('pageTitle','metaDescription','canonical'));
    }

             public function contract()
    {
        $canonical = "https://right-trademark.com/contract-Drafting-Review";
        return view('contract',compact('canonical'));
    }
    
      public function regulatory()
    {
        $canonical = "https://right-trademark.com/regulatory-Approvals-Permits";
        return view('regulatory',compact('canonical'));
    }
    
      public function accounting()
    {
        $canonical = "https://right-trademark.com/accounting-Bookkeeping";
        return view('accounting',compact('canonical'));
    }
    
       public function corporate()
    {
        $canonical = "https://right-trademark.com/corporate-Bank-Account-Opening";
        return view('corporate',compact('canonical'));
    }
    
        public function provisa()
    {
        $canonical = "https://right-trademark.com/pro-Visa-Services";
        return view('provisa',compact('canonical'));
    }
    
    public function officespace()
    {
        $canonical = "https://right-trademark.com/office-Space-Virtual-Address-Solutions";
        return view('officespace',compact('canonical'));
    }
    
     public function software()
    {
        $canonical = "https://right-trademark.com/software-development";
        return view('software',compact('canonical'));
    }
    
    public function webapp()
    {
        $canonical = "https://right-trademark.com/web-app-development";
        return view('webapp',compact('canonical'));
    }
    
     public function cloudcomputing()
    {
        $canonical = "https://right-trademark.com/cloud-computing";
        return view('cloudcomputing',compact('canonical'));
    }
    
     
     public function cyber()
    {
        $canonical = "https://right-trademark.com/cyber-security";
        return view('cyber',compact('canonical'));
    }
    
     public function itconsulting()
    {
        $canonical = "https://right-trademark.com/it-consulting";
        return view('itconsulting',compact('canonical'));
    }
     public function uiux()
    {
        $canonical = "https://right-trademark.com/uiux";
        return view('uiux',compact('canonical'));
    }
    
     public function brandstrategy()
    {
        $pageTitle = "Brand Strategy Consulting UAE & Dubai | Brand registration UAE";
        $metaDescription = "Brand registration UAE: Drive brand growth with expert brand strategy consulting in the UAE and Dubai. Right Trademark helps your brand stand out and scale.";
        $canonical = "https://right-trademark.com/brand-strategy-consulting";
        $metaKeyWord = "Brand registration UAE, Brand registration Dubai, Brand registration";
        return view('brandstrategy',compact('pageTitle','metaDescription','canonical','metaKeyWord'));
    }
    
     public function corporateidentity()
    { 
        $pageTitle = "Corporate Identity Services UAE & Dubai | Brand registration UAE";
        $metaDescription = "Brand registration UAE: Create a powerful and consistent corporate identity in the UAE and Dubai. Right Trademark offers expert services that define your brand’s visual identity, messaging, and behavior.";
        $canonical = "https://right-trademark.com/corporate-identity";
        $metaKeyWord = "Brand registration UAE, Brand registration Dubai, Corporate Identity Services UAE Digital Branding";
        return view('corporateidentity',compact('pageTitle','metaDescription','canonical','metaKeyWord'));
    }
    
     public function appdesign()
    {
        $pageTitle = "Website & App Design Services UAE & Dubai | Right Trademark";
        $metaDescription = "Elevate your digital presence with expert website and mobile app design in the UAE and Dubai. Right Trademark delivers seamless UX/UI, brand-aligned visuals, and full-stack development tailored for your brand.";
        $canonical = "https://right-trademark.com/website-app-design";
        $metaKeyWord = "Website & App Design Services UAE & Dubai, Right Trademark";
        return view('appdesign',compact('pageTitle','metaDescription','canonical','metaKeyWord'));
    }
     public function socialmediacreatives()
    {
        $canonical = "https://right-trademark.com/social-media-creatives";
        return view('socialmediacreatives',compact('canonical'));
    }
    
      public function ads()
    {
        $canonical = "https://right-trademark.com/ads-campaign-designs";
        return view('ads',compact('canonical'));
    }
    
      public function packaging()
    {
        $canonical = "https://right-trademark.com/packaging-product-design";
        return view('packaging',compact('canonical'));
    }
    
    public function marketingmaterials()
    {
        $canonical = "https://right-trademark.com/marketing-materials";
        return view('marketingmaterials',compact('canonical'));
    }
    
      public function presentationdesign()
    {
        $canonical = "https://right-trademark.com/presentation-design";
        return view('presentationdesign',compact('canonical'));
    }
    
      public function networkdesign()
    {
        $canonical = "https://right-trademark.com/network-design-Consulting";
        return view('networkdesign',compact('canonical'));
    }
    
       public function managednetworkservices()
    {
        $canonical = "https://right-trademark.com/managed-network-services";
        return view('managednetworkservices',compact('canonical'));
    }
    
       public function itsupportforenterprises()
    {
        $canonical = "https://right-trademark.com/it-support-for-enterprises";
        return view('itsupportforenterprises',compact('canonical'));
    }
    
       public function manufacturingautomation()
    {
        $canonical = "https://right-trademark.com/manufacturing-automation";
        return view('manufacturingautomation',compact('canonical'));
    }
    
      public function smartfactories()
    {
        $canonical = "https://right-trademark.com/smart-factories";
        return view('smartfactories',compact('canonical'));
    }
    
     public function transportationtech()
    {
        $canonical = "https://right-trademark.com/transportation-tech";
        return view('transportationtech',compact('canonical'));
    }
    
    public function aerospace()
    {
        $canonical = "https://right-trademark.com/aerospace-defense";
        return view('aerospace',compact('canonical'));
    }
    
     
    public function customersupport()
    {
        $canonical = "https://right-trademark.com/customer-support-chatbot";
        return view(' customersupport',compact('canonical'));
    }
    
     public function businesschatbot()
    {
        $canonical = "https://right-trademark.com/business-chatbot-integration";
        return view(' businesschatbot',compact('canonical'));
    }
    
      public function team()
    {
        $canonical = "https://right-trademark.com/team";
        return view(' team',compact('canonical'));
    }
    
      public function tmregister()
    {
        return view(' tmregister');
    }
    
          public function branding()
    {
        return view(' branding');
    }
    
             public function technology()
    {
        return view('technology');
    }
                public function    businesssetup()
    {
        return view('businesssetup');
    }
    
                  public function trade()
    {
        return view('trade');
    }
 
              public function trademarklis()
    {
        $pageTitle = "Trademark Registration: Right-Trademark – Expert IP Services";
        $metaDescription = "Register your trademark in Dubai and across the UAE with Right-Trademark. Fast, secure & professional intellectual-property services to protect your brand. Get started today.";
        $canonical = "https://right-trademark.com/trademark";
        $metaKeyWord = "Trademark registration, Register a trademark in UAE, UAE trademark search, Dubai trademark search, Dubai trademark registration, How to register a brand in UAE, Trademark consultant UAE, Trademark Registration UAE, Trademark Registration Dubai, Brand registration UAE, Trademark registration services, Trademark search";
        return view('trademarklis',compact('pageTitle','metaDescription','canonical','metaKeyWord'));
    }
            public function error()
    {
        return view(' error');
    }
    
    
      public function test()
    {
        return view('test');
    }
    
    
      public function brandregistrationuae()
    {
        $pageTitle = "Brand Registration UAE | Trademark Registration Dubai & UAE";
        $metaDescription = "Register your brand in the UAE with expert trademark services. Get complete legal protection for your brand name and logo with a smooth and reliable registration process.";
        $canonical = "https://right-trademark.com/brand-registration-uae";
        $metaKeyWord = "brand registration UAE, trademark registration Dubai, UAE trademark registration, register brand UAE, trademark services UAE, Dubai trademark services, brand protection UAE, logo registration UAE, business trademark UAE, UAE IP services";
        return view('brandregistrationuae',compact('pageTitle','metaDescription','canonical','metaKeyWord'));
    }
    
    
    
    public function branduae()
    {
        $pageTitle = "Brand Registration UAE | Trademark Registration Dubai & UAE";
        $metaDescription = "Register your brand in the UAE with expert trademark services. Get complete legal protection for your brand name and logo with a smooth and reliable registration process.";
        $canonical = "https://right-trademark.com/brand-uae";
        $metaKeyWord = "brand registration UAE, trademark registration Dubai, UAE trademark registration, register brand UAE, trademark services UAE, Dubai trademark services, brand protection UAE, logo registration UAE, business trademark UAE, UAE IP services";
        return view('branduae',compact('pageTitle','metaDescription','canonical','metaKeyWord'));
    }
    
    
     public function registertrademarkuae()
    {
        $pageTitle = "Trademark Registration UAE | Register Trademark in Dubai & UAE";
        $metaDescription = "Secure your brand with trademark registration in the UAE. Protect your name, logo, and identity with expert guidance and a smooth, reliable registration process.";
        $canonical = "https://right-trademark.com/trademark-registration-uae";
        $metaKeyWord = "trademark registration UAE, register trademark Dubai, UAE trademark registration, trademark services UAE, Dubai trademark registration, brand protection UAE, logo trademark UAE, trademark filing UAE, UAE IP registration, trademark consultants UAE";
        return view('registertrademarkuae',compact('pageTitle','metaDescription','canonical','metaKeyWord'));
    }
    
}
