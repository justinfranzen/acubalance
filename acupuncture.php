<title>Acupuncture | AcuBalance LLC</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
<?php
include 'includes/header.php';
?>

<body>
    
<h1 class="img-text">Acupuncture</h1>
    
<div class="img2" alt="Acupuncture"></div>
    
    <div id="content">
        
        <br>
        
        <p>Acupuncture is a component of traditional Chinese medicine that originated in China over 5,000 years ago. It is based on the belief that living beings have a vital energy, called "qi", that circulates through twelve energy lines known as meridians on the body. Each meridian is associated with a different organ system. An imbalance in the flow of qi throughout a meridian is how disease begins.</p>
        
        <p>Acupuncture is the placement of fine needles along these pathways, stimulating a focused response from the nervous, cardiovascular, musculoskeletal, hormonal, and immune systems, restoring Qi movement and bringing harmony back to the body.</p>
    
        <h4><strong>Optimize Your Energy and You Optimize Your Health</strong></h4>
        
        <p>Acupuncture is an incredibly powerful internal medicine that helps a multitude of symptoms and diseases. Acupuncture is in the infancy of medicine here in America and is starting to make ground breaking steps. Here is a list of some of the conditions Acupuncture can help.</p>
        
        <p>WHO - The World Health Organization has found these Diseases, symptoms or conditions for which acupuncture has been proved— through controlled trials—to be an effective treatment: </p>
        
        <div class="row">
        
            <div class="col-lg-7 col-md-7 col-sm-12">
                
                <br>
            
            <p id="symptoms"></p>    

            <script>
                
                var symptoms = ["Adverse reactions to radiotherapy and/or chemotherapy", "Allergic rhinitis (including hay fever)", "Biliary colic", "Depression (including depressive neurosis and depression following stroke) Dysentery, acute bacillary", "Dysmenorrhoea, primary", "Epigastralgia, acute (in peptic ulcer, acute and chronic gastritis, and gastrospasm)", "Facial pain (including craniomandibular disorders)", "Headache", "Hypertension, essential", "Hypotension, primary", "Induction of labour", "Knee pain", "Leukopenia", "Low back pain", "Malposition of fetus correction of morning sickness", "Nausea and vomiting", "Neck pain", "Pain in dentistry (including dental pain and temporomandibular dysfunction)", "Periarthritis of shoulder", "Postoperative pain", "Renal colic", "Rheumatoid arthritis", "Sciatica", "Sprain", "Stroke", "Tennis elbow" ];
                
                var text = "";
                
                for (var i=0; i < symptoms.length; i++) {
                     text += "<ul><li class='symptom'>" + symptoms[i] + "</li></ul>";
                }
                
                document.getElementById("symptoms").innerHTML = text;
                
            </script>    
                
            <!----
                <ul>
                    <li>Adverse reactions to radiotherapy and/or chemotherapy</li>
                    <li>Allergic rhinitis (including hay fever)</li>
                    <li>Biliary colic </li>
                    <li>Depression (including depressive neurosis and depression following stroke) 
                    Dysentery, acute bacillary </li>
                    <li>Dysmenorrhoea, primary </li>
                    <li>Epigastralgia, acute (in peptic ulcer, acute and chronic gastritis, and gastrospasm)</li>
                    <li>Facial pain (including craniomandibular disorders)</li>
                    <li>Headache</li>
                    <li>Hypertension, essential</li>
                    <li>Hypotension, primary</li> 
                    <li>Induction of labour</li>
                    <li>Knee pain</li> 
                    <li>Leukopenia</li> 
                    <li>Low back pain</li> 
                    <li>Malposition of fetus, correction of morning sickness</li>
                    <li>Nausea and vomiting </li>
                    <li>Neck pain </li>
                    <li>Pain in dentistry (including dental pain and temporomandibular dysfunction) </li>
                    <li>Periarthritis of shoulder </li>
                    <li>Postoperative pain </li>
                    <li>Renal colic </li>
                    <li>Rheumatoid arthritis</li> 
                    <li>Sciatica </li>
                    <li>Sprain </li>
                    <li>Stroke </li>
                    <li>Tennis elbow </li>
                </ul>
            ------>
            
            </div>
            
            <div class="col-lg-5 col-md-5 col-sm-12">
            
                <img src="images/acupuncture.png" alt="Acupuncture" id="acupuncture" />
                
                <img src="images/back-pain.png" alt="Low Back Pain" id="back-pain" />
            
            </div>
            
        </div>
        
    </div>
        
        <div id="bgcolor">
    
            <div class="bgcolor-content">

                <p id="statement">So for the people that are fearful, there is nothing to lose for it can only help the body! Lets work together and get to the root of your problems. <a href="tel:262-995-8778" class="cta">Call today</a> and lets start on this new path to health and wellness.</p>

            </div>
            
    </div>
    

</body>
    
<?php
include 'includes/footer.php';
?>