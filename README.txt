+======================+=================================================+
| Important Legal Note | (tl;dr "Don't blame me if this melts your dog") |
+======================+=================================================+
THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.


=== Install Instructions ===
1) Upload all to somewhere visible on the web.
2) And you're done.

=== Usage Instructions ===
Call the script through your web browser with a GET request. Example: http://www.example.com/title.php?userid=1
Result returns as JSON, e.g. {"fp_title": "Gold Member"}

Variables:
 : userid - The user ID (NOT USERNAME) of the user you want the title for.
 : mediawiki - If defined (mediawiki=1, mediawiki=yes, whatever), returns results in MediaWiki format instead of
               HTML. WARNING: MEDIAWIKI CONVERTER IS WRITTEN RATHER TERRIBLY.
