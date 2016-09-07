            <div class="item{if ($key == 1)} active{/if}">  
              <div class="container">
                <div class="carousel-caption center-block">
                  <div class="o-question">
                    <div class="i-question">
                        <h2 class="question-question">{$question->question}</h2>
                        <div class="question-description">{$question->description}</div>
                        <div class="question-links row">
                          <div class="col-sm-4">
                          {if (isset($question->link))}
                            <a href="{$question->link}" target="_blank"><i class="fa fa-external-link"> </i> {$text['page_question_link']}</a>
                          {/if}
                          </div>
                          <div class="col-sm-4"></div>
                          <div class="col-sm-4">
                          {if (isset($question->document_link))}
                            <a href="{$question->document_link}" target="_blank"><i class="fa fa-file-text-o"> </i> {$text['page_question_document_link']}</a>
                          {/if}
                          </div>
                        </div>
                    </div> <!-- /.i-question -->
                  </div> <!-- /.o-question -->
                  
                  <p class="vote-buttons"> 
                    <div data-toggle="buttons" data-target="#carousel" data-slide="next">
                      <label class="btn btn-lg btn-info vote-button" id="label-{$key}-{$question->id}-1">
                        <input type="radio" name="q{$question->id}" id="q{$question->id}-1" value="1">{$text['page_question_yes']}
                      </label>
                      <label class="btn btn-lg btn-info vote-button" id="label-{$key}-{$question->id}--1">
                        <input type="radio" name="q{$question->id}" id="q{$question->id}--1" value="-1">{$text['page_question_no']}
                      </label>
                      <label class="btn btn-lg btn-info vote-button" id="label-{$key}-{$question->id}-0">
                        <input type="radio" name="q{$question->id}" id="q{$question->id}-0" value="0">{$text['page_question_neutral']}<span class="hidden-xs">{$text['page_question_neutral_add']}</span>
                      </label>
                    </div> <!-- /buttons -->
                  </p> <!-- /.vote-buttons -->
                  
                </div>
              </div>
            </div>
