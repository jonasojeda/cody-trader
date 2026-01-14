import { useState, useEffect } from "react";
import { Play, ChevronDown } from "lucide-react";
import { Button } from "@/components/ui/button";
import { api, Blog } from "../lib/api";
import {
  Dialog,
  DialogContent,
  DialogHeader,
  DialogTitle,
  DialogDescription,
} from "@/components/ui/dialog";



const BlogSection = () => {
  const [selectedBlog, setSelectedBlog] = useState<Blog | null>(null);
  const [showAll, setShowAll] = useState(false);
  const [blogPosts, setBlogPosts] = useState<Blog[]>([]);

  useEffect(() => {
    const fetchBlogs = async () => {
      try {
        const response = await api.getBlogs();
        if (response && response.data) {
          setBlogPosts(response.data);
        }
      } catch (error) {
        console.error("Error fetching blogs:", error);
      }
    };
    fetchBlogs();
  }, []);

  // Sort by order and limit display
  const sortedPosts = [...blogPosts].sort((a, b) => a.order - b.order);
  const displayedPosts = showAll ? sortedPosts : sortedPosts.slice(0, 3);
  const hasMorePosts = sortedPosts.length > 3;

  return (
    <section id="blog" className="py-20 bg-muted/30">
      <div className="container mx-auto px-4">
        {/* Section Header */}
        <div className="text-center mb-12">
          <span className="inline-block px-4 py-1 bg-primary/10 text-primary rounded-full text-sm font-medium mb-4">
            Blog & Recursos
          </span>
          <h2 className="text-3xl md:text-4xl font-bold text-foreground mb-4">
            Aprende con Nuestros Videos
          </h2>
          <p className="text-muted-foreground max-w-2xl mx-auto">
            Explora nuestra colección de videos educativos sobre trading y
            criptomonedas
          </p>
        </div>

        {/* Blog Grid */}
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          {displayedPosts.map((post) => (
            <article
              key={post.id}
              onClick={() => setSelectedBlog(post)}
              className="group cursor-pointer bg-card rounded-xl overflow-hidden border border-border hover:border-primary/50 transition-all duration-300 hover:shadow-lg hover:shadow-primary/10"
            >
              {/* Thumbnail with Play Overlay */}
              <div className="relative aspect-video overflow-hidden">
                <img
                  src={post.thumbnail}
                  alt={post.title}
                  className="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"
                />
                <div className="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                  <div className="w-16 h-16 rounded-full bg-primary/90 flex items-center justify-center">
                    <Play className="w-8 h-8 text-primary-foreground ml-1" />
                  </div>
                </div>
                {/* Order Badge */}
                {/* <div className="absolute top-3 left-3 w-8 h-8 rounded-full bg-primary text-primary-foreground flex items-center justify-center text-sm font-bold">
                  {post.order}
                </div> */}
              </div>

              {/* Content */}
              <div className="p-5">
                <h3 className="text-lg font-semibold text-foreground mb-2 line-clamp-2 group-hover:text-primary transition-colors">
                  {post.title}
                </h3>
                <p className="text-muted-foreground text-sm line-clamp-2">
                  {post.description}
                </p>
              </div>
            </article>
          ))}
        </div>

        {/* Show More Button */}
        {hasMorePosts && !showAll && (
          <div className="text-center mt-8">
            <Button
              variant="outline"
              size="lg"
              onClick={() => setShowAll(true)}
              className="gap-2"
            >
              Ver más
              <ChevronDown className="w-4 h-4" />
            </Button>
          </div>
        )}

        {/* Show Less Button */}
        {showAll && hasMorePosts && (
          <div className="text-center mt-8">
            <Button
              variant="outline"
              size="lg"
              onClick={() => setShowAll(false)}
              className="gap-2"
            >
              Ver menos
            </Button>
          </div>
        )}
      </div>

      {/* Video Dialog */}
      <Dialog open={!!selectedBlog} onOpenChange={() => setSelectedBlog(null)}>
        <DialogContent className="max-w-4xl p-0 overflow-hidden">
          {selectedBlog && (
            <>
              {/* YouTube Embed */}
              <div className="aspect-video w-full">
                <iframe
                  src={`https://www.youtube.com/embed/${selectedBlog.youtubeId}?autoplay=1`}
                  title={selectedBlog.title}
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowFullScreen
                  className="w-full h-full"
                />
              </div>

              {/* Content */}
              <div className="p-6">
                <DialogHeader>
                  <DialogTitle className="text-xl md:text-2xl">
                    {selectedBlog.title}
                  </DialogTitle>
                  <DialogDescription className="text-base mt-4 leading-relaxed">
                    {selectedBlog.description}
                  </DialogDescription>
                </DialogHeader>
              </div>
            </>
          )}
        </DialogContent>
      </Dialog>
    </section>
  );
};

export default BlogSection;
