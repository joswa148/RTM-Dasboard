<?php
$file = 'resources/views/index.blade.php';
$content = file_get_contents($file);
$search = 'No, we provide trademark services across all Emirates and also support international clients through online processing."
      }';
$replace = 'No, we provide trademark services across all Emirates and also support international clients through online processing."
      }
    }
  ]
}
</script>
@endverbatim

<div class="nav-imgindex">
<div class="container-fluid px-0 hero-section">
      <div class="row pt-lg-2" id="heross">
        <div class="col-lg-12 ">
            <p class="msewwe" style="
    background: #fb1010;
    color: #fff;';

if (strpos($content, $search) !== false) {
    $newContent = str_replace($search, $replace, $content);
    file_put_contents($file, $newContent);
    echo "Fixed successfully\n";
} else {
    echo "Search string not found\n";
    // Try a more flexible match
    $searchFlexible = '/No, we provide trademark services.*?\}\s+padding: 1px 8px;/s';
    if (preg_match($searchFlexible, $content)) {
         echo "Found flexible match\n";
    }
}
