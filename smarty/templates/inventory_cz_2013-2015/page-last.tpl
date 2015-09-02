            <div class="item" id="item-last">  
              <div class="container">
                <div class="carousel-caption center-block">
                  <h2>{$t['page_important_questions']}</h2>
                  <p>{$t['page_important_legend']}</p>
                  
                  <p>
                    <button class="btn btn-default btn-lg wide-button" type="submit">{$t['page_important_skip']} <i class="fa fa-arrow-right"></i></button>
                  </p>
                  
                  <div data-toggle="buttons">
                    <table class="table">
                      <tbody>
                      {foreach $questions as $question}
                        <tr id="weightsel-row-{$question->id}">
                          <td class="weightsel-td">
                            <label class="weightsel-button btn btn-lg" for="c-{$question->id}">
                              <input type="checkbox" name="c-{$question->id}" id="c-{$question->id}"/> {$question->name}
                            </label>
                          </td>
                        </tr>  
                      {/foreach} 
                      </tbody>
                    </table>
                  </div> <!-- /buttons -->
                  
                  <p>
                    <button class="btn btn-default btn-lg wide-button" type="submit">{$t['page_important_results']} <i class="fa fa-arrow-right"></i></button>
                  </p>

                </div>
              </div>
            </div>
