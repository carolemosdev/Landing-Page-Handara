<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Belleza&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <?php wp_head(); ?> 
</head>
<body <?php body_class(); ?>>

<header class="header">
    <div class="container navbar">
        <a href="<?php echo home_url(); ?>" class="logo">HANDARA</a>
        <nav class="nav-menu">
            <a href="#produtos">Coleções</a>
            <a href="#diferenciais">Diferenciais</a>
            <a href="#revenda">Revenda</a>
            <a href="#depoimentos">Depoimentos</a>
        </nav>
    </div>
</header>

<main>
    <section class="hero-novo-design">
        <div class="container hero-container-grid">
            <div class="hero-content-novo">
                <span class="tagline-principal" style="color:#c95d3c; font-weight:bold; letter-spacing:2px;">HANDARA JEANS</span>
                <h1 class="titulo-principal-hero">O Jeans que Veste até dois tamanhos.</h1>
                <p class="descricao-hero">Mais do que moda, é uma declaração de empoderamento e estilo. Descubra o caimento perfeito que a sua cliente procura.</p>
                <a href="https://shre.ink/sejarevendedora" target="_blank" class="btn-novo">Descubra o Atacado</a>
            </div>
            <div class="hero-imagem-fundo">
                <img src="<?php echo get_template_directory_uri(); ?>/imagens/_Z3A0728.jpg" 
                     alt="Modelo Handara Jeans" 
                     fetchpriority="high" 
                     decoding="sync">
            </div>
        </div>
    </section>

    <section id="diferenciais">
        <div class="container">
            <h2 class="section-title">Nossa Essência</h2>
            <div class="diferenciais-grid">
                <div class="card-diferencial">
                    <h3>Modelagem Exclusiva</h3>
                    <p>Desenvolvida para valorizar todas as curvas.</p>
                </div>
                <div class="card-diferencial">
                    <h3>Tecnologia</h3>
                    <p>Fios de alta resistência e durabilidade.</p>
                </div>
                <div class="card-diferencial">
                    <h3>Vendas Garantidas</h3>
                    <p>Estoque sempre renovado com tendências.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="produtos">
        <div class="container">
            <h2 class="section-title">Destaques da Coleção</h2>
            <div class="product-grid">
                <div class="product-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/imagens/MAGIC SIZE FLARE (3).jpg" alt="Calça Flare" loading="lazy" decoding="async">
                    <h3>Calça Magic Size® Flare</h3>
                    <a href="#" class="btn-produto">Ver Detalhes</a>
                </div>
                <div class="product-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/imagens/MAGIC SIZE SKINNY GLAMUROSA (3).jpg" alt="Skinny Glamurosa" loading="lazy" decoding="async">
                    <h3>Calça Magic Size® Skinny Glamurosa</h3>
                    <a href="#" class="btn-produto">Ver Detalhes</a>
                </div>
                <div class="product-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/imagens/MAGIC SIZE WIDE LEG (6).jpg" alt="Jeans Wide Leg" loading="lazy" decoding="async">
                    <h3>Calça Magic Size® Wide Leg</h3>
                    <a href="#" class="btn-produto">Ver Detalhes</a>
                </div>
            </div>
        </div>
    </section>

    <section id="depoimentos">
        <div class="container text-center">
            <h2 class="section-title">O que nossas clientes dizem?</h2>
            <p style="margin-bottom: 30px; font-size: 1.2rem;">Veja os prints reais de satisfação:</p>
            <div class="depoimentos-grid">
                <div class="depoimento-card">
                    <img src="https://blog.handara.com.br/wp-content/uploads/2026/01/depoimento.jpeg" alt="Depoimento 1" loading="lazy" decoding="async">
                </div>
                <div class="depoimento-card">
                    <img src="https://blog.handara.com.br/wp-content/uploads/2026/01/depoimento2.jpeg" alt="Depoimento 2" loading="lazy" decoding="async">
                </div>
                <div class="depoimento-card">
                    <img src="https://blog.handara.com.br/wp-content/uploads/2026/01/depoimento3.jpeg" alt="Depoimento 3" loading="lazy" decoding="async">
                </div>
            </div>
        </div>
    </section>

    <section id="revenda">
        <div class="container">
            <div class="fabrica-info">
                <div class="fabrica-imagem">
                    <img src="http://blog.handara.com.br/wp-content/uploads/2026/01/HANDARA-1-scaled.webp" alt="Fábrica Handara" loading="lazy" decoding="async">
                </div>
                <div class="fabrica-texto">
                    <h3>Revenda Handara e Cresça</h3>
                    <p>São 30 anos de história no mercado jeanswear. Oferecemos:</p>
                    <ul style="list-style: none; margin: 20px 0;">
                        <li><strong>✓</strong> Margem de lucro excelente</li>
                        <li><strong>✓</strong> Produtos de alta rotatividade</li>
                        <li><strong>✓</strong> Suporte total ao lojista</li>
                    </ul>
                    <a href="https://shre.ink/sejarevendedora" class="btn-novo">Quero ser Revendedora</a>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-final">
        <div class="container">
            <h2>Pronta para transformar seu faturamento?</h2>
            <a href="https://shre.ink/sejarevendedora" class="btn-novo" style="background: #fff; color: #333;">FALAR COM CONSULTORA AGORA</a>
        </div>
    </section>
</main>

<footer id="footer" class="footer">
    <div class="container">
        <p>&copy; <?php echo date('Y'); ?> Handara Jeans. Todos os direitos reservados.</p>
    </div>
</footer>

<?php wp_footer(); ?> 
</body>
</html>