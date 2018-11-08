  <table id="bgt_table" class="tablesorter">
    <thead>

    <!-- Title -->
    <tr>
      <th class="sorter-false tablesorter-headerRow" colspan="8" >
        <span class="btn btn-sm" style="cursor:default; font-size:0.9375rem" >
          <?=$navbarItems[$navbarItemKey][0]?>
        </span>
      </th>
    </tr>

    <!-- Toolbar -->
    <tr>
      <th class="sorter-false tablesorter-headerRow" colspan="8" >
        <span class="btn btn-sm" style="cursor:default;" >
          <span id="bgt_table_row_count"></span> row<span id="bgt_table_row_count_s">s</span>
        </span>
        <span class="float-right">
          <button id="refreshButton" class="btn btn-sm btn-link" onclick="toggleRefresh()" disabled >
            <i id="startRefreshIcon" class="fas fa-sync-alt text-success"></i>
            <i id="stopRefreshIcon" class="far fa-stop-circle text-danger" style="display:none"></i>
            Refresh
          </button>
          <button class="btn btn-sm btn-link" onclick="uploadSnapshot()">
            <i class="fas fa-download"></i> Download
          </button>
        </span>
      </th>
    </tr>

      <tr>
        <th>AlphaNumeric</th>
        <th>Numeric</th>
        <th>Animals</th>
        <th>Sites</th>
        <th>AlphaNumeric</th>
        <th>Numeric</th>
        <th>Animals</th>
        <th>Sites</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>000 000</td>
        <td>10</td>
        <td>Koala</td>
        <td>http://www.google.com</td>
        <td>abc 123</td>
        <td>10</td>
        <td>Koala</td>
        <td>http://www.google.com</td>
      </tr>
      <tr>
        <td>abc 1</td>
        <td>234</td>
        <td>Ox</td>
        <td>http://www.yahoo.com</td>
        <td>abc 1</td>
        <td>234</td>
        <td>Ox</td>
        <td>http://www.yahoo.com</td>
      </tr>
      <tr>
        <td>abc 9</td>
        <td>10</td>
        <td>Girafee</td>
        <td>http://www.facebook.com</td>
        <td>abc 9</td>
        <td>10</td>
        <td>Girafee</td>
        <td>http://www.facebook.com</td>
      </tr>
      <tr>
        <td>zyx 24</td>
        <td>767</td>
        <td>Bison</td>
        <td>http://www.whitehouse.gov/</td>
        <td>zyx 24</td>
        <td>767</td>
        <td>Bison</td>
        <td>http://www.whitehouse.gov/</td>
      </tr>
      <tr>
        <td>abc 11</td>
        <td>3</td>
        <td>Chimp</td>
        <td>http://www.ucla.edu/</td>
        <td>abc 11</td>
        <td>3</td>
        <td>Chimp</td>
        <td>http://www.ucla.edu/</td>
      </tr>
      <tr>
        <td>abc 2</td>
        <td>56</td>
        <td>Elephant</td>
        <td>http://www.wikipedia.org/</td>
        <td>abc 2</td>
        <td>56</td>
        <td>Elephant</td>
        <td>http://www.wikipedia.org/</td>
      </tr>
      <tr>
        <td>abc 9</td>
        <td>155</td>
        <td>Lion</td>
        <td>http://www.nytimes.com/</td>
        <td>abc 9</td>
        <td>155</td>
        <td>Lion</td>
        <td>http://www.nytimes.com/</td>
      </tr>
      <tr>
        <td>ABC 10</td>
        <td>87</td>
        <td>Zebra</td>
        <td>http://www.google.com</td>
        <td>ABC 10</td>
        <td>87</td>
        <td>Zebra</td>
        <td>http://www.google.com</td>
      </tr>
      <tr>
        <td>abc 123</td>
        <td>10</td>
        <td>Koala</td>
        <td>http://www.google.com</td>
        <td>abc 123</td>
        <td>10</td>
        <td>Koala</td>
        <td>http://www.google.com</td>
      </tr>
      <tr>
        <td>abc 1</td>
        <td>234</td>
        <td>Ox</td>
        <td>http://www.yahoo.com</td>
        <td>abc 1</td>
        <td>234</td>
        <td>Ox</td>
        <td>http://www.yahoo.com</td>
      </tr>
      <tr>
        <td>abc 9</td>
        <td>10</td>
        <td>Girafee</td>
        <td>http://www.facebook.com</td>
        <td>abc 9</td>
        <td>10</td>
        <td>Girafee</td>
        <td>http://www.facebook.com</td>
      </tr>
      <tr>
        <td>zyx 24</td>
        <td>767</td>
        <td>Bison</td>
        <td>http://www.whitehouse.gov/</td>
        <td>zyx 24</td>
        <td>767</td>
        <td>Bison</td>
        <td>http://www.whitehouse.gov/</td>
      </tr>
      <tr>
        <td>abc 11</td>
        <td>3</td>
        <td>Chimp</td>
        <td>http://www.ucla.edu/</td>
        <td>abc 11</td>
        <td>3</td>
        <td>Chimp</td>
        <td>http://www.ucla.edu/</td>
      </tr>
      <tr>
        <td>abc 2</td>
        <td>56</td>
        <td>Elephant</td>
        <td>http://www.wikipedia.org/</td>
        <td>abc 2</td>
        <td>56</td>
        <td>Elephant</td>
        <td>http://www.wikipedia.org/</td>
      </tr>
      <tr>
        <td>abc 9</td>
        <td>155</td>
        <td>Lion</td>
        <td>http://www.nytimes.com/</td>
        <td>abc 9</td>
        <td>155</td>
        <td>Lion</td>
        <td>http://www.nytimes.com/</td>
      </tr>
      <tr>
        <td>ABC 10</td>
        <td>87</td>
        <td>Zebra</td>
        <td>http://www.google.com</td>
        <td>ABC 10</td>
        <td>87</td>
        <td>Zebra</td>
        <td>http://www.google.com</td>
      </tr>
      <tr>
        <td>abc 123</td>
        <td>10</td>
        <td>Koala</td>
        <td>http://www.google.com</td>
        <td>abc 123</td>
        <td>10</td>
        <td>Koala</td>
        <td>http://www.google.com</td>
      </tr>
      <tr>
        <td>abc 1</td>
        <td>234</td>
        <td>Ox</td>
        <td>http://www.yahoo.com</td>
        <td>abc 1</td>
        <td>234</td>
        <td>Ox</td>
        <td>http://www.yahoo.com</td>
      </tr>
      <tr>
        <td>abc 9</td>
        <td>10</td>
        <td>Girafee</td>
        <td>http://www.facebook.com</td>
        <td>abc 9</td>
        <td>10</td>
        <td>Girafee</td>
        <td>http://www.facebook.com</td>
      </tr>
      <tr>
        <td>zyx 24</td>
        <td>767</td>
        <td>Bison</td>
        <td>http://www.whitehouse.gov/</td>
        <td>zyx 24</td>
        <td>767</td>
        <td>Bison</td>
        <td>http://www.whitehouse.gov/</td>
      </tr>
      <tr>
        <td>abc 11</td>
        <td>3</td>
        <td>Chimp</td>
        <td>http://www.ucla.edu/</td>
        <td>abc 11</td>
        <td>3</td>
        <td>Chimp</td>
        <td>http://www.ucla.edu/</td>
      </tr>
      <tr>
        <td>abc 2</td>
        <td>56</td>
        <td>Elephant</td>
        <td>http://www.wikipedia.org/</td>
        <td>abc 2</td>
        <td>56</td>
        <td>Elephant</td>
        <td>http://www.wikipedia.org/</td>
      </tr>
      <tr>
        <td>abc 9</td>
        <td>155</td>
        <td>Lion</td>
        <td>http://www.nytimes.com/</td>
        <td>abc 9</td>
        <td>155</td>
        <td>Lion</td>
        <td>http://www.nytimes.com/</td>
      </tr>
      <tr>
        <td>ABC 10</td>
        <td>87</td>
        <td>Zebra</td>
        <td>http://www.google.com</td>
        <td>ABC 10</td>
        <td>87</td>
        <td>Zebra</td>
        <td>http://www.google.com</td>
      </tr>
      <tr>
        <td>abc 123</td>
        <td>10</td>
        <td>Koala</td>
        <td>http://www.google.com</td>
        <td>abc 123</td>
        <td>10</td>
        <td>Koala</td>
        <td>http://www.google.com</td>
      </tr>
      <tr>
        <td>abc 1</td>
        <td>234</td>
        <td>Ox</td>
        <td>http://www.yahoo.com</td>
        <td>abc 1</td>
        <td>234</td>
        <td>Ox</td>
        <td>http://www.yahoo.com</td>
      </tr>
      <tr>
        <td>abc 9</td>
        <td>10</td>
        <td>Girafee</td>
        <td>http://www.facebook.com</td>
        <td>abc 9</td>
        <td>10</td>
        <td>Girafee</td>
        <td>http://www.facebook.com</td>
      </tr>
      <tr>
        <td>zyx 24</td>
        <td>767</td>
        <td>Bison</td>
        <td>http://www.whitehouse.gov/</td>
        <td>zyx 24</td>
        <td>767</td>
        <td>Bison</td>
        <td>http://www.whitehouse.gov/</td>
      </tr>
      <tr>
        <td>abc 11</td>
        <td>3</td>
        <td>Chimp</td>
        <td>http://www.ucla.edu/</td>
        <td>abc 11</td>
        <td>3</td>
        <td>Chimp</td>
        <td>http://www.ucla.edu/</td>
      </tr>
      <tr>
        <td>abc 2</td>
        <td>56</td>
        <td>Elephant</td>
        <td>http://www.wikipedia.org/</td>
        <td>abc 2</td>
        <td>56</td>
        <td>Elephant</td>
        <td>http://www.wikipedia.org/</td>
      </tr>
      <tr>
        <td>abc 9</td>
        <td>155</td>
        <td>Lion</td>
        <td>http://www.nytimes.com/</td>
        <td>abc 9</td>
        <td>155</td>
        <td>Lion</td>
        <td>http://www.nytimes.com/</td>
      </tr>
      <tr>
        <td>ABC 10</td>
        <td>87</td>
        <td>Zebra</td>
        <td>http://www.google.com</td>
        <td>ABC 10</td>
        <td>87</td>
        <td>Zebra</td>
        <td>http://www.google.com</td>
      </tr>
      <tr>
        <td>abc 123</td>
        <td>10</td>
        <td>Koala</td>
        <td>http://www.google.com</td>
        <td>abc 123</td>
        <td>10</td>
        <td>Koala</td>
        <td>http://www.google.com</td>
      </tr>
      <tr>
        <td>abc 1</td>
        <td>234</td>
        <td>Ox</td>
        <td>http://www.yahoo.com</td>
        <td>abc 1</td>
        <td>234</td>
        <td>Ox</td>
        <td>http://www.yahoo.com</td>
      </tr>
      <tr>
        <td>abc 9</td>
        <td>10</td>
        <td>Girafee</td>
        <td>http://www.facebook.com</td>
        <td>abc 9</td>
        <td>10</td>
        <td>Girafee</td>
        <td>http://www.facebook.com</td>
      </tr>
      <tr>
        <td>zyx 24</td>
        <td>767</td>
        <td>Bison</td>
        <td>http://www.whitehouse.gov/</td>
        <td>zyx 24</td>
        <td>767</td>
        <td>Bison</td>
        <td>http://www.whitehouse.gov/</td>
      </tr>
      <tr>
        <td>abc 11</td>
        <td>3</td>
        <td>Chimp</td>
        <td>http://www.ucla.edu/</td>
        <td>abc 11</td>
        <td>3</td>
        <td>Chimp</td>
        <td>http://www.ucla.edu/</td>
      </tr>
      <tr>
        <td>abc 2</td>
        <td>56</td>
        <td>Elephant</td>
        <td>http://www.wikipedia.org/</td>
        <td>abc 2</td>
        <td>56</td>
        <td>Elephant</td>
        <td>http://www.wikipedia.org/</td>
      </tr>
      <tr>
        <td>abc 9</td>
        <td>155</td>
        <td>Lion</td>
        <td>http://www.nytimes.com/</td>
        <td>abc 9</td>
        <td>155</td>
        <td>Lion</td>
        <td>http://www.nytimes.com/</td>
      </tr>
      <tr>
        <td>ABC 10</td>
        <td>87</td>
        <td>Zebra</td>
        <td>http://www.google.com</td>
        <td>ABC 10</td>
        <td>87</td>
        <td>Zebra</td>
        <td>http://www.google.com</td>
      </tr>
      <tr>
        <td>abc 123</td>
        <td>10</td>
        <td>Koala</td>
        <td>http://www.google.com</td>
        <td>abc 123</td>
        <td>10</td>
        <td>Koala</td>
        <td>http://www.google.com</td>
      </tr>
      <tr>
        <td>abc 1</td>
        <td>234</td>
        <td>Ox</td>
        <td>http://www.yahoo.com</td>
        <td>abc 1</td>
        <td>234</td>
        <td>Ox</td>
        <td>http://www.yahoo.com</td>
      </tr>
      <tr>
        <td>abc 9</td>
        <td>10</td>
        <td>Girafee</td>
        <td>http://www.facebook.com</td>
        <td>abc 9</td>
        <td>10</td>
        <td>Girafee</td>
        <td>http://www.facebook.com</td>
      </tr>
      <tr>
        <td>zyx 24</td>
        <td>767</td>
        <td>Bison</td>
        <td>http://www.whitehouse.gov/</td>
        <td>zyx 24</td>
        <td>767</td>
        <td>Bison</td>
        <td>http://www.whitehouse.gov/</td>
      </tr>
      <tr>
        <td>abc 11</td>
        <td>3</td>
        <td>Chimp</td>
        <td>http://www.ucla.edu/</td>
        <td>abc 11</td>
        <td>3</td>
        <td>Chimp</td>
        <td>http://www.ucla.edu/</td>
      </tr>
      <tr>
        <td>abc 2</td>
        <td>56</td>
        <td>Elephant</td>
        <td>http://www.wikipedia.org/</td>
        <td>abc 2</td>
        <td>56</td>
        <td>Elephant</td>
        <td>http://www.wikipedia.org/</td>
      </tr>
      <tr>
        <td>abc 9</td>
        <td>155</td>
        <td>Lion</td>
        <td>http://www.nytimes.com/</td>
        <td>abc 9</td>
        <td>155</td>
        <td>Lion</td>
        <td>http://www.nytimes.com/</td>
      </tr>
      <tr>
        <td>ABC 10</td>
        <td>87</td>
        <td>Zebra</td>
        <td>http://www.google.com</td>
        <td>ABC 10</td>
        <td>87</td>
        <td>Zebra</td>
        <td>http://www.google.com</td>
      </tr>
      <tr>
        <td>zyx 12</td>
        <td>0</td>
        <td>Llama</td>
        <td>http://www.nasa.gov/</td>
        <td>zyx 12</td>
        <td>0</td>
        <td>Llama</td>
        <td>http://www.nasa.gov/</td>
      </tr>
    </tbody>
  </table>

<script>


  $( document ).ready( init );

  function init()
  {
    $( '#table_pane' ).on( 'resize', onResizePane );

    $( '#bgt_table' ).tablesorter(
      {
        theme: 'dropbox',
        widgets: ['stickyHeaders'],
        widgetOptions:
        {
          stickyHeaders_offset : $( '#bgt_table' ).offset().top
        }
      }
    );
  }

  function onResizePane( tEvent )
  {
    var tWrapper = $( '.tablesorter-sticky-wrapper' );
    if ( tWrapper.width() > $( tEvent.target ).width() )
    {
      tWrapper.hide();
    }
    else
    {
      tWrapper.show();
    }
  }
</script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.0/css/theme.blue.min.css" integrity="sha256-Xj5kQBWJMyOV0+sPr+wIBUHXdoZ00TPgT+RuiyOXtzo=" crossorigin="anonymous" />
