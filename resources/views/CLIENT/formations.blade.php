@extends('client.layout')
@section('formations')
    <section class="content_box_formation ">
        <div class="formations">
            <button class="box" onclick="openOnglet(event,'stat')" id="tablinks">
                <img class="icon" src="{{ asset('CLIENT_ASSETS/images/D_statistique.svg') }}" alt="">
                <h3>Statistique</h3>
                </a>
            </button>
            <button class="box" id="tablinks" onclick="openOnglet(event,'plan')">
                <img class="icon" src="{{ asset('CLIENT_ASSETS/images/D_planification.svg') }}" alt="">
                <h3>Planification </h3>
                </a>
            </button>
            <button class="box" id="tablinks" onclick="openOnglet(event,'management')">
                <img class="icon" src="{{ asset('CLIENT_ASSETS/images/D_management.svg') }}" alt="">

                <h3>Management</h3>
                </a>
            </button>
            <button class="box" id="tablinks" onclick="openOnglet(event,'informatique')">
                <img class="icon" src="{{ asset('CLIENT_ASSETS/images/D_informatique.svg') }}" alt="">

                <h3>Informatique </h3>
                </a>
            </button>
            <button class="box" id="tablinks" onclick="openOnglet(event,'expertise_comptable')">
                <img class="icon" src="{{ asset('CLIENT_ASSETS/images/D_comptabilite.svg') }}" alt="">
                <h3>Expertise Comptable</h3>
            </button>

        </div>
        <div class="ss_content">
            <div class="container_box" id="stat">
                <h3>Departement de la Statistique</h3>
                <h4>Cycle I : Spécialités en Licence classique (Bac+3)</h4>
                <ul>
                    <li>
                        Statistiques Démographiques et Sociales (SDS) ;
                    </li>
                    <li>Statistiques Economiques et Sectorielles (SES).</li>
                </ul>
                <h4>Cycle II : Spécialité en Master professionnel (Licence +2)
                </h4>
                <ul>
                    <li>
                        Statistiques Economiques (SE).
                    </li>
                </ul>
            </div>
            <div class="container_box" id="plan">
                <h3>Département de la Planification du Développement</h3>
                <h4>Cycle I : Spécialités en Licence classique (Bac+3)</h4>
                <ul>
                    <li>Planification et Gestion des Projets (PGP) ;</li>
                    <li>Développement Local et Régional (DLR) ;</li>
                    <li>Economie et Gestion de l’Environnement (EGE).</li>
                </ul>
                <h4>Cycle II : Spécialité en Master professionnel (Licence +2)</h4>
                <ul>
                    <li>Planification et Gestion des Projets (PGP).</li>
                </ul>
            </div>
            <div class="container_box" id="management">
                <div class="div scroll_container">
                    <h3>Département du Management des Organisations</h3>
                    <h4>Cycle I :</h4>
                    <h4>
                        Spécialités en Licence Professionnelle (BTS+1) :
                    </h4>
                    <ul>
                        <li> Finance et Comptabilité (FC);</li>
                        <li>Banque et Assurance (BA);</li>
                        <li>Technique Commerciale et Marketing (TCM);</li>
                        <li>Transport et Logistique (TL);</li>
                        <li>Management des Ressources Humaines (MRH).</li>
                    </ul>
                    <h4> Spécialités en Licence classique (Bac+3)</h4>
                    <ul>
                        <li> Gestion Financière et Comptable (GFC), avec comme profil de sortie: </li>
                        <li>Finances et Comptabilité (FC).</li>
                        <li>Gestion Commerciale (GC), avec comme profils de sortie:</li>
                        <li>Action Commerciale et Force de Vente (ACFV);</li>
                        <li>Commerce International (CI).</li>
                        <li>Gestion des Banques et Assurances (GBA), avec comme profils de sortie:</li>
                        <li>Marché Financier (MF);</li>
                        <li> Banque et Micro-finance (BM);</li>
                        <li>Banque et Assurance (BA).</li>
                        <li>Transport et Logistique (TL), avec comme profils de sortie:</li>
                        <li>Transports Terrestres (TT);</li>
                        <li>Transports Aéroportuaires (TA);</li>
                        <li>Transports Ferroviaires (TF);</li>
                        <li> Logistiques (L).</li>
                        <li> Gestion des Ressources Humaines (GRH).</li>
                    </ul>
                    <h4> Cycle II : Spécialité en Master Professionnel (Licence+2)</h4>
                    <ul>
                        <li>Contrôle de Gestion et Audit Financier (CGAF);</li>
                        <li>Banque et Finance des Marchés (BFM);</li>
                        <li> Gestion Commerciale (GC) ;</li>
                        <li> Gestion des Ressources Humaines et Communication (GRHC).</li>
                    </ul>
                </div>
            </div>
            <div class="container_box" id="informatique">
                <h3>Département de l'Informatique</h3>
                <h4>Cycle I :</h4>
                <h4>Spécialités en Licence Professionnelle (BTS+1)</h4>
                <ul>
                    <li>
                        Informatique de Gestion (IG) ; </li>
                    <li>Réseau Informatique et Maintenance (RIM). </li>
                </ul>
                <h4>Spécialités en Licence classique (Bac+3) </h4>
                <ul>
                    <li> Analyse et Programmation (AP) ; </li>
                    <li> Réseau Informatique et Maintenance (RIM). </li>
                </ul>
                <h4>Cycle II : Spécialités en Master Professionnel (Licence+2)</h4>
                <ul>
                    <li> Audit Informatique. </li>
                    <li> Génie Logiciel et Informatique Décisionnelle. </li>
                </ul>
            </div>
            <div class="container_box" id="expertise_comptable">
                <div class="contain_expertise">
                    <div class="titre_section">
                        <a href="#presentation_formation">Présentation de la Formation</a>
                        <a href="#gestion_formation"> Gestion de la Formation</a>
                    </div>
                    <div class="scroll_container">
                        <section class="scroll_page" id="presentation_formation">
                            <h4>Presentation de la formation</h4>
                            <p>La formation pour le DESCOGEF est l’une des composantes d’un ensemble de dispositions
                                communautaires visant à organiser la profession comptable et à instaurer des pratiques
                                comptables uniformes qui garantissent la fiabilité des informations comptables et leur
                                conformité aux normes internationales.</p> <br>
                            <h2>Public Concerné</h2>
                            <p>La formation s’adresse aux :</p>
                            <ul>
                                <li>professionnels de la comptabilité désireux d’obtenir le Diplôme d’Expertise
                                    Comptable et Financière ;</li>
                                <li>étudiants titulaires d’un diplôme de niveau Bac + 4 ans, ou d’un diplôme reconnu
                                    comme équivalent.</li>
                            </ul> <br>
                            <h2>Profil de Sortie</h2>
                            <p>Le dispositif doit permettre de former des professionnels de qualité, par référence d’une
                                part, aux standards internationaux fixés par l’International Federation of Accountants -
                                IFAC-; le Comité Intergouvernemental sur les Normes Comptables Internationales de la
                                Conférence des Nations Unies pour le Commerce et le Développement – CNUCED -;
                                l’International Accounting Standards Committee –IASC - ; et d’autre part, aux
                                spécificités de la région liées notamment au Système Comptable Ouest Africain – SYSCOA -
                                et aux dispositions du Traité de l’Organisation pour l’Harmonisation du Droit des
                                Affaires – OHADA. </p>
                            <p>Les professionnels de haut niveau ainsi formés seront les garants de la qualité des états
                                financiers et les conseillers indispensables des opérateurs économiques.</p> <br>
                            <h2>Débouchés</h2>
                            <ul>
                                <li>Cabinets d’Expertise Comptable, d’Audit et de Commissariat aux comptes ;</li>
                                <li>Entreprises, Administrations et Organisations.</li>
                            </ul> <br><br><br><br>

                            <h2>Organisation de la formation</h2>
                            <p> Le cursus comprend quatre étapes : l’entrée, la formation théorique et technique
                                approfondie, le stage professionnel, l’examen final.</p>

                            <ul>
                                <li>
                                    <p><B>Entrée</B> : Les candidats à l’entrée du cycle de formation conduisant au
                                        Diplôme d’Expertise Comptable et Financière doivent être titulaires d’un diplôme
                                        de niveau Bac + 4 et doivent passer un test de sélection</p>

                                </li>
                                <li> <B>Cycle de formation théorique et technique approfondie </B> : d’une durée d’un an
                                    et du
                                    niveau 3ème cycle, cette formation est sanctionnée par le Diplôme d’Etudes
                                    Supérieures de Comptabilité et Gestion Financière (DESCOGEF) qui ouvre l’accès au
                                    stage professionnel d’Expertise Comptable et Financière.
                                </li>
                                <li>
                                    <B>Test de sélection </B> : L’admission au programme du DESCOGEF se fait par test de
                                    sélection. Le test est ouvert aux titulaires d’un diplôme BAC+4 ou équivalent dans
                                    le domaine des Sciences de Gestion.
                                </li>

                            </ul>


                        </section>
                        <section class="scroll_page" id="gestion_formation">
                            <h4>Gestion de la formation</h4>






                            <h2>Epreuves de Sélection</h2>
                            <p>Les candidats au test de sélection subissent <b><u>5</u></b> épreuves :</p>
                            <table class="tableau1">
                                <thead>
                                    <td><strong>Epreuves</strong> </td>
                                    <td><strong>Durée</strong> </td>
                                    <td><strong>Coef</strong> </td>
                                </thead>
                                <tr>
                                    <td>Comptabilité et Analyse financière </td>
                                    <td>4H</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Economie et Gestion d’Entreprise</td>
                                    <td>4H</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Droit </td>
                                    <td>4H</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td> Méthodes quantitatives et Informatique</td>
                                    <td>4H</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Anglais</td>
                                    <td>3H</td>
                                    <td>1</td>
                                </tr>

                                <tr>
                                    <td><strong>Toute note inférieure à 6 sur 20 est éliminatoire Ne comporte pas de
                                            note éliminatoire</strong></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Sont déclarés admis, les candidats ayant obtenu la moyenne générale de 10 sur
                                        20, sans note éliminatoire.
                                        Une attestation de réussite est délivrée par la Directrice de l’ENEAM.</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table>

                            <p><strong>NB:</strong>Les personnes intéressées doivent faire acte de candidature par le
                                dépôt d’un dossier dûment rempli, au plus tard à la date limite fixée par l’ENEAM</p>

                            <h2>Programme de Formation</h2>

                            <table class="tableau2">
                                <tr>
                                    <td><strong>Enseignements</strong> </td>
                                    <td><strong> Masse Horaires</strong></td>
                                </tr>
                                <tr>
                                    <td><strong>Audit</strong> </td>
                                    <td><strong>120H</strong></td>
                                </tr>
                                <tr>
                                    <td><strong>Méthodologie de l’Audit</strong></td>
                                    <td><strong>40H</strong></td>
                                </tr>
                                <tr>
                                    <td>Mise en Œuvre de l’Audit : outils de l’Audit, documents de travail, conduite de
                                        mission, industries spécialisées </td>
                                    <td>30H</td>
                                </tr>
                                <tr>
                                    <td>Audit de Management, Audit Opérationnel, Audit des Projets, Audit des Etats
                                        financiers Prospectifs</td>
                                    <td>20H</td>
                                </tr>
                                <tr>
                                    <td>Prévention et Détection des Fraudes, Techniques d’évaluation des dommages
                                        financiers, Expertise Judiciaire </td>
                                    <td>30H</td>
                                </tr>
                                <tr>
                                    <td><strong>Comptabilité</strong></td>
                                    <td><strong>170H</strong></td>
                                </tr>
                                <tr>
                                    <td>Comptabilité Financière approfondie </td>
                                    <td>70H</td>
                                </tr>
                                <tr>
                                    <td>Comptabilité des Sociétés et des Groupes </td>
                                    <td>40H</td>
                                </tr>
                                <tr>
                                    <td>Comptabilités Spéciales : gouvernement, collectivités locales, assurances,
                                        banques, hôpitaux, universités</td>
                                    <td>40H</td>
                                </tr>
                                <tr>
                                    <td>Théories, Principes et Systèmes Comptables Comparés</td>
                                    <td>20H</td>
                                </tr>
                                <tr>
                                    <td><strong>Organisation et gestion</strong></td>
                                    <td><strong>140H</strong></td>
                                </tr>
                                <tr>
                                    <td>Contrôle de Gestion approfondi</td>
                                    <td>60H</td>
                                </tr>
                                <tr>
                                    <td>Méthodes Scientifiques d’Aide à la Décision Logistique,</td>
                                    <td>30H</td>
                                </tr>
                                <tr>
                                    <td>Gestion de la Production et de la Qualité</td>
                                    <td>20H</td>
                                </tr>
                                <tr>
                                    <td>Management et Stratégie</td>
                                    <td>30H</td>
                                </tr>
                                <tr>
                                    <td><strong>Gestion financière et marchés financiers</strong></td>
                                    <td><strong>120H</strong></td>
                                </tr>
                                <tr>
                                    <td>Analyse Financière, Diagnostic Economique et évaluation de l’Entreprise</td>
                                    <td>20H</td>
                                </tr>
                                <tr>
                                    <td><strong></strong> Gestion Financière à Court terme et Gestion de la trésorerie
                                    </td>
                                    <td> 20H</td>
                                </tr>
                                <tr>
                                    <td>Gestion Financière à Long terme et Planification Financière</td>
                                    <td>20H</td>
                                </tr>
                                <tr>
                                    <td>Gestion Financière Internationale</td>
                                    <td>20H</td>
                                </tr>
                                <tr>
                                    <td>Organisation et Contrôle des Marchés Boursiers au comptant et à terme</td>
                                    <td>20H</td>
                                </tr>
                                <tr>
                                    <td>Gestion de Portefeuille de Titres Financiers</td>
                                    <td>20H</td>
                                </tr>
                                <tr>
                                    <td><strong>Droit et fiscalité</strong></td>
                                    <td><strong>100H</strong></td>
                                </tr>
                                <tr>
                                    <td>Droit des Affaires (OHADA)</td>
                                    <td>50H</td>
                                </tr>
                                <tr>
                                    <td>Fiscalité Comparée </td>
                                    <td>30H</td>
                                </tr>
                                <tr>
                                    <td>Droit Social Comparé, Droit du Travail Comparé, Droit Pénal Comparé</td>
                                    <td>20H</td>
                                </tr>
                                <tr>
                                    <td><strong>Communication et leadership</strong></td>
                                    <td><strong>50H</strong></td>
                                </tr>
                                <tr>
                                    <td>Techniques de Communication et d’Intervention en Entreprise : Techniques
                                        d’expression écrite et orale, développement organisationnel, Techniques de
                                        Négociation, Réseaux de communication Interne et externe de l’entreprise,
                                        Gestion du temps, Conduite de réunion, Comportement au sein de l’Organisation ;
                                        leadership</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><strong>Informatique pour utilisateurs</strong></td>
                                    <td><strong>60H</strong></td>
                                </tr>
                                <tr>
                                    <td>Informatique de Gestion pour Utilisateurs : apprentissage des logiciels courants
                                        en comptabilité, en finance et en gestion des opérations </td>
                                    <td>20H</td>
                                </tr>
                                <tr>
                                    <td>Audit des Systèmes d’Information Automatisés et outils informatiques de
                                        l’Auditeur</td>
                                    <td>20H</td>
                                </tr>
                                <tr>
                                    <td>Audit des Risques et de la Sécurité du système d’Information</td>
                                    <td>20H</td>
                                </tr>
                                <tr>
                                    <td><strong>Anglais</strong></td>
                                    <td><strong>50H</strong></td>
                                </tr>

                            </table>
                            <h2>Evaluation et délivrance de diplômes</h2>
                            <p>Le<strong>DESCOGEF </strong>est décerné aux candidats ayant obtenu, sans note
                                éliminatoire, la moyenne générale de 10 sur 20 à l’ensemble des épreuves de l’examen.
                                L’examen comporte deux séries d’épreuves, organisées de façon successive, au cours d’une
                                même session. </p>

                            <ul>
                                <li><strong>Première série de sept épreuves écrites :</strong></li>
                            </ul>
                            <table class="tableau1">
                                <thead>
                                    <td><strong>Epreuves</strong> </td>
                                    <td><strong>Durée</strong> </td>
                                    <td><strong>Coef</strong> </td>
                                </thead>
                                <tr>
                                    <td>Comptabilité financière approfondie et comptabilité des sociétés</td>
                                    <td>4H</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Comptabilité des groupes, Audit</td>
                                    <td>4H</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Management et contrôle de gestion </td>
                                    <td>4H</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td> Technique et gestion financière</td>
                                    <td>4H</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Droit des affaires, fiscalité</td>
                                    <td>4H</td>
                                    <td>1</td>
                                </tr>

                                <tr>
                                    <td>Mathématiques appliquées, Informatique</td>
                                    <td>4H</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Anglais</td>
                                    <td>4H</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td><strong> Toute note inférieure à 6 sur 20 est éliminatoire sauf pour l’épreuve
                                            d’anglais</strong></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table>
                            <ul>
                                <li><strong>
                                        Deuxième série de trois épreuves dites de synthèse
                                    </strong></li>
                            </ul>
                            <table class="tableau1">
                                <thead>
                                    <td><strong>Epreuves</strong> </td>
                                    <td><strong>Durée</strong> </td>
                                    <td><strong>Coef</strong> </td>
                                </thead>
                                <tr>
                                    <td>Techniques comptables et financières et problèmes juridiques</td>
                                    <td>4H</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Techniques comptables et financières et problèmes de gestion </td>
                                    <td>4H</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Grand Oral (2 heures de préparation) </td>
                                    <td>4H</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td> <strong>Toute note inférieure à 8 sur 20 est éliminatoire</strong></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table>
                            <h2>Gouvernance du curcus d'Expertise Comptable et Financière </h2>
                            <p>Le Conseil des Ministres de l’UEMOA nomme les membres du jury et de la Commission
                                Régionale pour la Formation des Experts Comptables et Financiers (CREFECF). Le diplôme
                                est signé par le Président du Conseil des Ministres.</p>
                            <p>La Commission Régionale pour la Formation des Experts Comptables et Financiers a un rôle
                                de conception du système, d’examen des dispenses, de proposition des membres du jury, de
                                mise à jour des programmes, de définition des calendriers d’examens, etc.</p>
                            <p>L’ENEAM, en tant qu’institution de formation sous-régionale, est chargée, en rapport avec
                                un jury indépendant, de l’organisation matérielle des examens.</p>

                        </section>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
